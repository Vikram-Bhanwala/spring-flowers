<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    // for property type page 
    public function SelectProp_type_view(){
        return view('select-property-type');
    }

    // for keeper type page 
    public function Selectkeep_type_view(){
        return view('select-keeper-type');
    }
    // for house cleaning page 
    public function HouseCleaningView(){
        return view('house-cleaning');
    }
    // fior privacy poicy
    public function PrivacyPolicy(){
        return view('privacy-policy');
    }
    // for blog listing page 
    public function BlogListing(){
        return view('blogs');
    }
    
    // for our story
    public function OurStoryView(){
        return view('our-story');
    }
// for shop 

    public function ShopView(){
        return view('shop');
    }

    // for join us
    public function JoinView(){
        return view('join-us');
    }

    // register form view
    public function RegisterView(){
        return view('registration');
    }







}
