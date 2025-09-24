<?php

namespace App\Controllers;
use App\Models\ContactModel;

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
            return redirect()->to('/');
        }else{
            return "Error";
        }
    }


}

?>