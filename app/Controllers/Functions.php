<?php

namespace App\Controllers;
use App\Models\ContactModel;
use App\Models\KeeperFormModel;
use App\Models\RegistrationModel;
use App\Models\SubscriptionModel;

class Functions extends BaseController
{

    public function ContactFunction(){
        // Log the request for debugging
        log_message('info', 'ContactFunction called');
        log_message('info', 'Request method: ' . $this->request->getMethod());
        log_message('info', 'Is AJAX: ' . ($this->request->isAJAX() ? 'yes' : 'no'));
        
        $Contact = new ContactModel();

        $data = [
            'name'=>$this->request->getVar('name'),
            'email'=>$this->request->getVar('email'),
            'phone'=>$this->request->getVar('phone'),
            'service'=>$this->request->getVar('service'),
            'message'=>$this->request->getVar('message'),
        ];

        // Log the data being saved
        log_message('info', 'Contact data: ' . json_encode($data));

        $save_contact = $Contact->save($data);
        
        // Log the save result
        log_message('info', 'Save result: ' . ($save_contact ? 'success' : 'failed'));

        // Send email notification
        $emailSent = $this->sendContactEmail($data);

		if($save_contact){
			if ($this->request->isAJAX()) {
				log_message('info', 'Returning AJAX success response');
				return $this->response->setJSON([
					'success' => true,
					'message' => 'Thank you for connecting with us.'
				]);
			}
			return redirect()->to('/')->with('contact_success', true);
		}else{
			if ($this->request->isAJAX()) {
				log_message('info', 'Returning AJAX error response');
				return $this->response->setStatusCode(400)->setJSON([
					'success' => false,
					'message' => 'An error occurred. Please try again.'
				]);
			}
			return "Error";
		}
    }

	public function KeeperFormSubmit(){
		// Validate required fields
		$validation = \Config\Services::validation();
		
		$validation->setRules([
			'timing' => 'required|in_list[Full Time,Part Time,Flexible]',
			'date' => 'required|valid_date',
			'num_kitchens' => 'required|in_list[1,2,3,4,5]',
			'num_rooms' => 'required|in_list[1,2,3,4,5]',
			'name' => 'required|min_length[2]|max_length[255]',
			'num_bathrooms' => 'required|in_list[1,2,3,4,5]',
			'town_area' => 'required|max_length[100]',
			'phone' => 'required|min_length[10]|max_length[20]',
			'postal_code' => 'required|min_length[3]|max_length[20]',
			'city' => 'required|min_length[2]|max_length[100]',
			'address' => 'required|min_length[10]|max_length[500]',
		]);

		if (!$validation->withRequest($this->request)->run()) {
			$errors = $validation->getErrors();
			if ($this->request->isAJAX()) {
				return $this->response->setStatusCode(400)->setJSON([
					'success' => false, 
					'message' => 'Please fill in all required fields correctly.',
					'errors' => $errors
				]);
			}
			return redirect()->back()->withInput()->with('validation_errors', $errors);
		}

		$keeper = new KeeperFormModel();

		$data = [
			'timing'        => $this->request->getVar('timing'),
			'date'          => $this->request->getVar('date'),
			'num_kitchens'  => $this->request->getVar('num_kitchens'),
			'num_rooms'     => $this->request->getVar('num_rooms'),
			'name'          => $this->request->getVar('name'),
			'num_bathrooms' => $this->request->getVar('num_bathrooms'),
			'town_area'     => $this->request->getVar('town_area'),
			'phone'         => $this->request->getVar('phone'),
			'postal_code'   => $this->request->getVar('postal_code'),
			'city'          => $this->request->getVar('city'),
			'address'       => $this->request->getVar('address'),
		];

		$save = $keeper->save($data);

		// Send email notification for keeper form
		if($save) {
			$emailSent = $this->sendKeeperFormEmail($data);
		}

		if($save){
			if ($this->request->isAJAX()) {
				return $this->response->setJSON(['success' => true]);
			}
			return redirect()->to('/keeper-thankyou');
		}else{
			if ($this->request->isAJAX()) {
				return $this->response->setStatusCode(400)->setJSON(['success' => false]);
			}
			return "Error";
		}
	}

	public function PropertyFormSubmit(){
		// Validate required fields
		$validation = \Config\Services::validation();
		
		$validation->setRules([
			'room' => 'required|in_list[1,2,3,4,5]',
			'num_kitchens' => 'required|in_list[1,2,3,4,5]',
			'num_bathrooms' => 'required|in_list[1,2,3,4,5]',
			'name' => 'required|min_length[2]|max_length[255]',
			'phone' => 'required|min_length[10]|max_length[20]',
			'town_area' => 'required|max_length[100]',
			'city' => 'required|min_length[2]|max_length[100]',
			'postal_code' => 'required|min_length[3]|max_length[20]',
			'address' => 'required|min_length[10]|max_length[500]',
		]);

		if (!$validation->withRequest($this->request)->run()) {
			$errors = $validation->getErrors();
			if ($this->request->isAJAX()) {
				return $this->response->setStatusCode(400)->setJSON([
					'success' => false, 
					'message' => 'Please fill in all required fields correctly.',
					'errors' => $errors
				]);
			}
			return redirect()->back()->withInput()->with('validation_errors', $errors);
		}

		// Only store data in session, don't save to database yet
		$data = [
			'num_rooms'     => $this->request->getVar('room'),
			'num_kitchens'  => $this->request->getVar('num_kitchens'),
			'num_bathrooms' => $this->request->getVar('num_bathrooms'),
			'name'          => $this->request->getVar('name'),
			'phone'         => $this->request->getVar('phone'),
			'town_area'     => $this->request->getVar('town_area'),
			'city'          => $this->request->getVar('city'),
			'postal_code'   => $this->request->getVar('postal_code'),
			'address'       => $this->request->getVar('address'),
		];

		// Store property details in session for the next step
		session()->set('property_details', $data);
		
		if ($this->request->isAJAX()) {
			return $this->response->setJSON(['success' => true]);
		}
		return redirect()->to('/property-date');
	}

	public function PropertyDateSubmit(){
		// Get property details from session
		$propertyDetails = session()->get('property_details');
		
		// Check if property details exist in session
		if (!$propertyDetails) {
			if ($this->request->isAJAX()) {
				return $this->response->setStatusCode(400)->setJSON(['success' => false, 'message' => 'Property details not found. Please start from the beginning.']);
			}
			return redirect()->to('/property-form')->with('error', 'Property details not found. Please start from the beginning.');
		}
		
		// Get date form data
		$plan = $this->request->getVar('plan');
		$selectedDate = $this->request->getVar('selected_date');
		$selectedDays = $this->request->getVar('selected_days');
		$timing = $this->request->getVar('timing');

		// Combine all data
		$data = array_merge($propertyDetails, [
			'plan' => $plan,
			'selected_date' => $selectedDate,
			'selected_days' => $selectedDays,
			'timing' => $timing,
		]);

		// Save to database only once at the end
		$keeper = new KeeperFormModel();
		$save = $keeper->save($data);

		// Send email notification for property form
		if($save) {
			$emailSent = $this->sendPropertyFormEmail($data);
		}

		if($save){
			// Store booking details in session for thank you page
			session()->set('booking_details', $data);
			
			// Clear property details from session to prevent duplicate submissions
			session()->remove('property_details');
			
			if ($this->request->isAJAX()) {
				return $this->response->setJSON(['success' => true]);
			}
			return redirect()->to('/property-thank-you');
		}else{
			if ($this->request->isAJAX()) {
				return $this->response->setStatusCode(400)->setJSON(['success' => false, 'message' => 'Failed to save booking. Please try again.']);
			}
			return redirect()->to('/property-date')->with('error', 'Failed to save booking. Please try again.');
		}
	}

	public function RegistrationSubmit(){
		// Log the request for debugging
		log_message('info', 'RegistrationSubmit called');
		log_message('info', 'Request method: ' . $this->request->getMethod());
		log_message('info', 'Is AJAX: ' . ($this->request->isAJAX() ? 'yes' : 'no'));
		
		// Log all POST data
		log_message('info', 'POST data: ' . json_encode($this->request->getPost()));
		
		// Validate required fields
		$validation = \Config\Services::validation();
		
		$validation->setRules([
			'job_type' => 'required|in_list[House Keeper,Companion,Cook,Groundman,Nanny,Security,Head House Keeper]',
			'name' => 'required|min_length[2]|max_length[255]',
			'phone' => 'required|min_length[10]|max_length[50]',
			'email' => 'required|valid_email|max_length[255]',
			'country_of_living' => 'required|min_length[2]|max_length[100]',
			'county' => 'required|min_length[2]|max_length[100]',
			'type_of_work' => 'required|in_list[live_in_work,live_out_work,flexible_work]',
			'availability_type' => 'required|in_list[full_time_availability,part_time_availability,flexible_availability]',
			'start_date' => 'required|in_list[asap_start,flexible_start]',
			'message' => 'permit_empty|max_length[1000]'
		]);

		if (!$validation->withRequest($this->request)->run()) {
			$errors = $validation->getErrors();
			log_message('info', 'Registration validation failed: ' . json_encode($errors));
			if ($this->request->isAJAX()) {
				return $this->response->setStatusCode(400)->setJSON([
					'success' => false, 
					'message' => 'Please fill in all required fields correctly.',
					'errors' => $errors
				]);
			}
			return redirect()->back()->withInput()->with('validation_errors', $errors);
		}

		$registration = new RegistrationModel();

		// Handle CV file upload
		$cvFilename = null;
		$cvPath = null;
		
		$cvFile = $this->request->getFile('cv_file');
		if ($cvFile && $cvFile->isValid() && !$cvFile->hasMoved()) {
			// Validate file type
			$allowedTypes = ['pdf', 'doc', 'docx', 'png', 'jpg', 'jpeg'];
			$fileExtension = $cvFile->getClientExtension();
			
			if (in_array(strtolower($fileExtension), $allowedTypes)) {
				// Create upload directory if it doesn't exist
				$uploadPath = WRITEPATH . 'uploads/cv/';
				if (!is_dir($uploadPath)) {
					mkdir($uploadPath, 0755, true);
				}
				
				// Generate unique filename
				$cvFilename = $cvFile->getClientName();
				$newName = time() . '_' . $cvFilename;
				$cvPath = 'uploads/cv/' . $newName;
				
				// Move file to upload directory
				if ($cvFile->move($uploadPath, $newName)) {
					$cvFilename = $newName;
				} else {
					$cvFilename = null;
					$cvPath = null;
				}
			}
		}

		$data = [
			'job_type' => $this->request->getVar('job_type'),
			'name' => $this->request->getVar('name'),
			'phone' => $this->request->getVar('phone'),
			'email' => $this->request->getVar('email'),
			'country_of_living' => $this->request->getVar('country_of_living'),
			'county' => $this->request->getVar('county'),
			'type_of_work' => $this->request->getVar('type_of_work'),
			'availability_type' => $this->request->getVar('availability_type'),
			'start_date' => $this->request->getVar('start_date'),
			'message' => $this->request->getVar('message'),
			'cv_filename' => $cvFilename,
			'cv_path' => $cvPath,
			'status' => 'pending'
		];

		// Log the data being saved
		log_message('info', 'Registration data: ' . json_encode($data));

		$save = $registration->save($data);
		
		// Log the save result
		log_message('info', 'Registration save result: ' . ($save ? 'success' : 'failed'));

		// Send email notification for registration form
		if($save) {
			$emailSent = $this->sendRegistrationFormEmail($data);
		}

		if($save){
			if ($this->request->isAJAX()) {
				log_message('info', 'Returning AJAX success response for registration');
				return $this->response->setJSON([
					'success' => true,
					'message' => 'Registration submitted successfully! We will contact you soon.'
				]);
			}
			return redirect()->to('/thankyou')->with('registration_success', true);
		}else{
			if ($this->request->isAJAX()) {
				log_message('info', 'Returning AJAX error response for registration');
				return $this->response->setStatusCode(400)->setJSON([
					'success' => false,
					'message' => 'Failed to submit registration. Please try again.'
				]);
			}
			return redirect()->back()->with('error', 'Failed to submit registration. Please try again.');
		}
	}

	public function TestRegistrationRoute(){
		return $this->response->setJSON([
			'success' => true,
			'message' => 'Registration route is working!',
			'timestamp' => date('Y-m-d H:i:s')
		]);
	}

	public function Subscribe(){
		$subscription = new SubscriptionModel();
		$email = trim((string) $this->request->getVar('email'));

		if ($email === '' || ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if ($this->request->isAJAX()) {
				return $this->response->setStatusCode(422)->setJSON(['success' => false, 'message' => 'Please enter a valid email.']);
			}
			return 'Invalid email';
		}

		$save = $subscription->save(['email' => $email]);

		if ($save) {
			if ($this->request->isAJAX()) {
				return $this->response->setJSON(['success' => true, 'message' => 'Thanks for subscribing!']);
			}
			return redirect()->back()->with('subscribe_success', true);
		}

		if ($this->request->isAJAX()) {
			return $this->response->setStatusCode(400)->setJSON(['success' => false, 'message' => 'Unable to subscribe. Try again.']);
		}
		return 'Error saving subscription';
	}

	/**
	 * Send contact form email notification
	 */
	private function sendContactEmail($data)
	{
		try {
			$email = \Config\Services::email();
			$emailConfig = new \Config\Email();
			
			// Set email configuration
			$email->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
			$email->setTo($emailConfig->recipients);
			$email->setSubject('New Contact Form Submission - Spring Flowers');
			
			// Create HTML email template
			$htmlMessage = $this->createContactEmailTemplate($data);
			$email->setMessage($htmlMessage);
			
			// Send email
			$result = $email->send();
			
			// Log email result
			log_message('info', 'Contact email sent: ' . ($result ? 'success' : 'failed'));
			if (!$result) {
				log_message('error', 'Email error: ' . $email->printDebugger());
			}
			
			return $result;
		} catch (\Exception $e) {
			log_message('error', 'Email sending failed: ' . $e->getMessage());
			return false;
		}
	}

	/**
	 * Create HTML email template for contact form
	 */
	private function createContactEmailTemplate($data)
	{
		$html = '
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<style>
				body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
				.container { max-width: 600px; margin: 0 auto; padding: 20px; }
				.header { background-color: #f8f9fa; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
				.content { background-color: #ffffff; padding: 30px; border: 1px solid #e9ecef; }
				.footer { background-color: #f8f9fa; padding: 15px; text-align: center; border-radius: 0 0 5px 5px; font-size: 12px; color: #6c757d; }
				.field { margin-bottom: 15px; }
				.label { font-weight: bold; color: #495057; }
				.value { margin-top: 5px; padding: 8px; background-color: #f8f9fa; border-radius: 3px; }
				.message-field .value { min-height: 60px; }
			</style>
		</head>
		<body>
			<div class="container">
				<div class="header">
					<h2>New Contact Form Submission</h2>
					<p>Spring Flowers Website</p>
				</div>
				<div class="content">
					<div class="field">
						<div class="label">Name:</div>
						<div class="value">' . htmlspecialchars($data['name'] ?? '') . '</div>
					</div>
					<div class="field">
						<div class="label">Email:</div>
						<div class="value">' . htmlspecialchars($data['email'] ?? '') . '</div>
					</div>
					<div class="field">
						<div class="label">Phone:</div>
						<div class="value">' . htmlspecialchars($data['phone'] ?? '') . '</div>
					</div>
					<div class="field">
						<div class="label">Service:</div>
						<div class="value">' . htmlspecialchars($data['service'] ?? '') . '</div>
					</div>
					<div class="field message-field">
						<div class="label">Message:</div>
						<div class="value">' . nl2br(htmlspecialchars($data['message'] ?? '')) . '</div>
					</div>
					<div class="field">
						<div class="label">Submitted:</div>
						<div class="value">' . date('Y-m-d H:i:s') . '</div>
					</div>
				</div>
				<div class="footer">
					<p>This email was sent from the Spring Flowers contact form.</p>
				</div>
			</div>
		</body>
		</html>';
		
		return $html;
	}

	/**
	 * Send keeper form email notification
	 */
	private function sendKeeperFormEmail($data)
	{
		try {
			$email = \Config\Services::email();
			$emailConfig = new \Config\Email();
			
			// Set email configuration
			$email->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
			$email->setTo($emailConfig->recipients);
			$email->setSubject('New Keeper Form Submission - Spring Flowers');
			
			// Create HTML email template
			$htmlMessage = $this->createKeeperFormEmailTemplate($data);
			$email->setMessage($htmlMessage);
			
			// Send email
			$result = $email->send();
			
			// Log email result
			log_message('info', 'Keeper form email sent: ' . ($result ? 'success' : 'failed'));
			if (!$result) {
				log_message('error', 'Keeper form email error: ' . $email->printDebugger());
			}
			
			return $result;
		} catch (\Exception $e) {
			log_message('error', 'Keeper form email sending failed: ' . $e->getMessage());
			return false;
		}
	}

	/**
	 * Create HTML email template for keeper form
	 */
	private function createKeeperFormEmailTemplate($data)
	{
		$html = '
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<style>
				body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
				.container { max-width: 600px; margin: 0 auto; padding: 20px; }
				.header { background-color: #f8f9fa; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
				.content { background-color: #ffffff; padding: 30px; border: 1px solid #e9ecef; }
				.footer { background-color: #f8f9fa; padding: 15px; text-align: center; border-radius: 0 0 5px 5px; font-size: 12px; color: #6c757d; }
				.field { margin-bottom: 15px; }
				.label { font-weight: bold; color: #495057; }
				.value { margin-top: 5px; padding: 8px; background-color: #f8f9fa; border-radius: 3px; }
				.section { margin-bottom: 25px; padding: 15px; background-color: #f8f9fa; border-radius: 5px; }
				.section-title { font-size: 18px; font-weight: bold; color: #2c3e50; margin-bottom: 15px; border-bottom: 2px solid #3498db; padding-bottom: 5px; }
			</style>
		</head>
		<body>
			<div class="container">
				<div class="header">
					<h2>New Keeper Form Submission</h2>
					<p>Spring Flowers Website</p>
				</div>
				<div class="content">
					<div class="section">
						<div class="section-title">Personal Information</div>
						<div class="field">
							<div class="label">Name:</div>
							<div class="value">' . htmlspecialchars($data['name'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Phone:</div>
							<div class="value">' . htmlspecialchars($data['phone'] ?? '') . '</div>
						</div>
					</div>
					
					<div class="section">
						<div class="section-title">Property Details</div>
						<div class="field">
							<div class="label">Address:</div>
							<div class="value">' . htmlspecialchars($data['address'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">City:</div>
							<div class="value">' . htmlspecialchars($data['city'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Town/Area:</div>
							<div class="value">' . htmlspecialchars($data['town_area'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Postal Code:</div>
							<div class="value">' . htmlspecialchars($data['postal_code'] ?? '') . '</div>
						</div>
					</div>
					
					<div class="section">
						<div class="section-title">Property Specifications</div>
						<div class="field">
							<div class="label">Number of Rooms:</div>
							<div class="value">' . htmlspecialchars($data['num_rooms'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Number of Kitchens:</div>
							<div class="value">' . htmlspecialchars($data['num_kitchens'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Number of Bathrooms:</div>
							<div class="value">' . htmlspecialchars($data['num_bathrooms'] ?? '') . '</div>
						</div>
					</div>
					
					<div class="section">
						<div class="section-title">Service Details</div>
						<div class="field">
							<div class="label">Timing:</div>
							<div class="value">' . htmlspecialchars($data['timing'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Preferred Date:</div>
							<div class="value">' . htmlspecialchars($data['date'] ?? '') . '</div>
						</div>
					</div>
					
					<div class="field">
						<div class="label">Submitted:</div>
						<div class="value">' . date('Y-m-d H:i:s') . '</div>
					</div>
				</div>
				<div class="footer">
					<p>This email was sent from the Spring Flowers keeper form.</p>
				</div>
			</div>
		</body>
		</html>';
		
		return $html;
	}

	/**
	 * Send property form email notification
	 */
	private function sendPropertyFormEmail($data)
	{
		try {
			$email = \Config\Services::email();
			$emailConfig = new \Config\Email();
			
			// Set email configuration
			$email->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
			$email->setTo($emailConfig->recipients);
			$email->setSubject('New Property Booking Submission - Spring Flowers');
			
			// Create HTML email template
			$htmlMessage = $this->createPropertyFormEmailTemplate($data);
			$email->setMessage($htmlMessage);
			
			// Send email
			$result = $email->send();
			
			// Log email result
			log_message('info', 'Property form email sent: ' . ($result ? 'success' : 'failed'));
			if (!$result) {
				log_message('error', 'Property form email error: ' . $email->printDebugger());
			}
			
			return $result;
		} catch (\Exception $e) {
			log_message('error', 'Property form email sending failed: ' . $e->getMessage());
			return false;
		}
	}

	/**
	 * Create HTML email template for property form
	 */
	private function createPropertyFormEmailTemplate($data)
	{
		$html = '
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<style>
				body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
				.container { max-width: 600px; margin: 0 auto; padding: 20px; }
				.header { background-color: #f8f9fa; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
				.content { background-color: #ffffff; padding: 30px; border: 1px solid #e9ecef; }
				.footer { background-color: #f8f9fa; padding: 15px; text-align: center; border-radius: 0 0 5px 5px; font-size: 12px; color: #6c757d; }
				.field { margin-bottom: 15px; }
				.label { font-weight: bold; color: #495057; }
				.value { margin-top: 5px; padding: 8px; background-color: #f8f9fa; border-radius: 3px; }
				.section { margin-bottom: 25px; padding: 15px; background-color: #f8f9fa; border-radius: 5px; }
				.section-title { font-size: 18px; font-weight: bold; color: #2c3e50; margin-bottom: 15px; border-bottom: 2px solid #3498db; padding-bottom: 5px; }
				.booking-highlight { background-color: #e8f5e8; border-left: 4px solid #27ae60; padding: 15px; margin: 20px 0; }
			</style>
		</head>
		<body>
			<div class="container">
				<div class="header">
					<h2>New Property Booking Submission</h2>
					<p>Spring Flowers Website</p>
				</div>
				<div class="content">
					<div class="booking-highlight">
						<h3 style="margin: 0; color: #27ae60;">🏠 New Property Booking Request</h3>
						<p style="margin: 5px 0 0 0; font-weight: bold;">A customer has submitted a property booking form!</p>
					</div>
					
					<div class="section">
						<div class="section-title">Customer Information</div>
						<div class="field">
							<div class="label">Name:</div>
							<div class="value">' . htmlspecialchars($data['name'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Phone:</div>
							<div class="value">' . htmlspecialchars($data['phone'] ?? '') . '</div>
						</div>
					</div>
					
					<div class="section">
						<div class="section-title">Property Details</div>
						<div class="field">
							<div class="label">Address:</div>
							<div class="value">' . htmlspecialchars($data['address'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">City:</div>
							<div class="value">' . htmlspecialchars($data['city'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Town/Area:</div>
							<div class="value">' . htmlspecialchars($data['town_area'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Postal Code:</div>
							<div class="value">' . htmlspecialchars($data['postal_code'] ?? '') . '</div>
						</div>
					</div>
					
					<div class="section">
						<div class="section-title">Property Specifications</div>
						<div class="field">
							<div class="label">Number of Rooms:</div>
							<div class="value">' . htmlspecialchars($data['num_rooms'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Number of Kitchens:</div>
							<div class="value">' . htmlspecialchars($data['num_kitchens'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Number of Bathrooms:</div>
							<div class="value">' . htmlspecialchars($data['num_bathrooms'] ?? '') . '</div>
						</div>
					</div>
					
					<div class="section">
						<div class="section-title">Booking Details</div>
						<div class="field">
							<div class="label">Service Plan:</div>
							<div class="value">' . htmlspecialchars($data['plan'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Selected Date:</div>
							<div class="value">' . htmlspecialchars($data['selected_date'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Selected Days:</div>
							<div class="value">' . htmlspecialchars($data['selected_days'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Timing:</div>
							<div class="value">' . htmlspecialchars($data['timing'] ?? '') . '</div>
						</div>
					</div>
					
					<div class="field">
						<div class="label">Submitted:</div>
						<div class="value">' . date('Y-m-d H:i:s') . '</div>
					</div>
				</div>
				<div class="footer">
					<p>This email was sent from the Spring Flowers property booking form.</p>
				</div>
			</div>
		</body>
		</html>';
		
		return $html;
	}

	/**
	 * Send registration form email notification
	 */
	private function sendRegistrationFormEmail($data)
	{
		try {
			$email = \Config\Services::email();
			$emailConfig = new \Config\Email();
			
			// Set email configuration
			$email->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
			$email->setTo($emailConfig->recipients);
			$email->setSubject('New Job Application Submission - Spring Flowers');
			
			// Create HTML email template
			$htmlMessage = $this->createRegistrationFormEmailTemplate($data);
			$email->setMessage($htmlMessage);
			
			// Send email
			$result = $email->send();
			
			// Log email result
			log_message('info', 'Registration form email sent: ' . ($result ? 'success' : 'failed'));
			if (!$result) {
				log_message('error', 'Registration form email error: ' . $email->printDebugger());
			}
			
			return $result;
		} catch (\Exception $e) {
			log_message('error', 'Registration form email sending failed: ' . $e->getMessage());
			return false;
		}
	}

	/**
	 * Create HTML email template for registration form
	 */
	private function createRegistrationFormEmailTemplate($data)
	{
		// Format work type for display
		$workTypeDisplay = '';
		switch($data['type_of_work'] ?? '') {
			case 'live_in_work':
				$workTypeDisplay = 'Live-in Work';
				break;
			case 'live_out_work':
				$workTypeDisplay = 'Live-out Work';
				break;
			case 'flexible_work':
				$workTypeDisplay = 'Flexible Work';
				break;
			default:
				$workTypeDisplay = $data['type_of_work'] ?? '';
		}

		// Format availability for display
		$availabilityDisplay = '';
		switch($data['availability_type'] ?? '') {
			case 'full_time_availability':
				$availabilityDisplay = 'Full Time Availability';
				break;
			case 'part_time_availability':
				$availabilityDisplay = 'Part Time Availability';
				break;
			case 'flexible_availability':
				$availabilityDisplay = 'Flexible Availability';
				break;
			default:
				$availabilityDisplay = $data['availability_type'] ?? '';
		}

		// Format start date for display
		$startDateDisplay = '';
		switch($data['start_date'] ?? '') {
			case 'asap_start':
				$startDateDisplay = 'ASAP';
				break;
			case 'flexible_start':
				$startDateDisplay = 'Flexible Start Date';
				break;
			default:
				$startDateDisplay = $data['start_date'] ?? '';
		}

		$html = '
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<style>
				body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
				.container { max-width: 600px; margin: 0 auto; padding: 20px; }
				.header { background-color: #f8f9fa; padding: 20px; text-align: center; border-radius: 5px 5px 0 0; }
				.content { background-color: #ffffff; padding: 30px; border: 1px solid #e9ecef; }
				.footer { background-color: #f8f9fa; padding: 15px; text-align: center; border-radius: 0 0 5px 5px; font-size: 12px; color: #6c757d; }
				.field { margin-bottom: 15px; }
				.label { font-weight: bold; color: #495057; }
				.value { margin-top: 5px; padding: 8px; background-color: #f8f9fa; border-radius: 3px; }
				.section { margin-bottom: 25px; padding: 15px; background-color: #f8f9fa; border-radius: 5px; }
				.section-title { font-size: 18px; font-weight: bold; color: #2c3e50; margin-bottom: 15px; border-bottom: 2px solid #3498db; padding-bottom: 5px; }
				.application-highlight { background-color: #fff3cd; border-left: 4px solid #ffc107; padding: 15px; margin: 20px 0; }
				.cv-info { background-color: #d1ecf1; border-left: 4px solid #17a2b8; padding: 10px; margin: 10px 0; }
			</style>
		</head>
		<body>
			<div class="container">
				<div class="header">
					<h2>New Job Application Submission</h2>
					<p>Spring Flowers Website</p>
				</div>
				<div class="content">
					<div class="application-highlight">
						<h3 style="margin: 0; color: #856404;">💼 New Job Application Received</h3>
						<p style="margin: 5px 0 0 0; font-weight: bold;">A candidate has submitted a job application!</p>
					</div>
					
					<div class="section">
						<div class="section-title">Applicant Information</div>
						<div class="field">
							<div class="label">Name:</div>
							<div class="value">' . htmlspecialchars($data['name'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Email:</div>
							<div class="value">' . htmlspecialchars($data['email'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Phone:</div>
							<div class="value">' . htmlspecialchars($data['phone'] ?? '') . '</div>
						</div>
					</div>
					
					<div class="section">
						<div class="section-title">Job Application Details</div>
						<div class="field">
							<div class="label">Job Type:</div>
							<div class="value">' . htmlspecialchars($data['job_type'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">Type of Work:</div>
							<div class="value">' . htmlspecialchars($workTypeDisplay) . '</div>
						</div>
						<div class="field">
							<div class="label">Availability:</div>
							<div class="value">' . htmlspecialchars($availabilityDisplay) . '</div>
						</div>
						<div class="field">
							<div class="label">Start Date:</div>
							<div class="value">' . htmlspecialchars($startDateDisplay) . '</div>
						</div>
					</div>
					
					<div class="section">
						<div class="section-title">Location Information</div>
						<div class="field">
							<div class="label">Country of Living:</div>
							<div class="value">' . htmlspecialchars($data['country_of_living'] ?? '') . '</div>
						</div>
						<div class="field">
							<div class="label">County:</div>
							<div class="value">' . htmlspecialchars($data['county'] ?? '') . '</div>
						</div>
					</div>';

		// Add CV information if available
		if (!empty($data['cv_filename'])) {
			$html .= '
					<div class="cv-info">
						<div class="label">📄 CV/Resume Attached:</div>
						<div class="value">' . htmlspecialchars($data['cv_filename']) . '</div>
						<p style="margin: 5px 0 0 0; font-size: 12px; color: #666;">CV file has been uploaded and saved to the server.</p>
					</div>';
		}

		// Add message if provided
		if (!empty($data['message'])) {
			$html .= '
					<div class="section">
						<div class="section-title">Additional Message</div>
						<div class="field">
							<div class="label">Message:</div>
							<div class="value">' . nl2br(htmlspecialchars($data['message'])) . '</div>
						</div>
					</div>';
		}

		$html .= '
					<div class="field">
						<div class="label">Application Status:</div>
						<div class="value">' . htmlspecialchars($data['status'] ?? 'pending') . '</div>
					</div>
					
					<div class="field">
						<div class="label">Submitted:</div>
						<div class="value">' . date('Y-m-d H:i:s') . '</div>
					</div>
				</div>
				<div class="footer">
					<p>This email was sent from the Spring Flowers job application form.</p>
				</div>
			</div>
		</body>
		</html>';
		
		return $html;
	}

	// // robot 
	// public function Robot(){
	// 	return view('robots.txt');
	// }
	// sitemap 
	// public function Sitemap(){
	// 	return view('sitemap.xml');
	// }
}

?>