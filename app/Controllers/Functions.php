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

}

?>