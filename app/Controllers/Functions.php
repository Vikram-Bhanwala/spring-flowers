<?php

namespace App\Controllers;
use App\Models\ContactModel;
use App\Models\KeeperFormModel;
use App\Models\SubscriptionModel;

class Functions extends BaseController
{

    public function ContactFunction(){
        $Contact = new ContactModel();

        $data = [
            'name'=>$this->request->getVar('name'),
            'email'=>$this->request->getVar('email'),
            'phone'=>$this->request->getVar('phone'),
            'service'=>$this->request->getVar('service'),
            'message'=>$this->request->getVar('message'),
        ];

        $save_contact = $Contact->save($data);

		if($save_contact){
			if ($this->request->isAJAX()) {
				return $this->response->setJSON([
					'success' => true,
					'message' => 'Thank you for connecting with us.'
				]);
			}
			return redirect()->to('/')->with('contact_success', true);
		}else{
			if ($this->request->isAJAX()) {
				return $this->response->setStatusCode(400)->setJSON([
					'success' => false,
					'message' => 'An error occurred. Please try again.'
				]);
			}
			return "Error";
		}
    }

	public function KeeperFormSubmit(){
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
			return redirect()->to('/property-thank-you');
		}else{
			if ($this->request->isAJAX()) {
				return $this->response->setStatusCode(400)->setJSON(['success' => false]);
			}
			return "Error";
		}
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