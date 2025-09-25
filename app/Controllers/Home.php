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

    // for thankyou page 
    public function Thankyou(){
        return view('thankyou');
    }

    // for book a service page 
    public function BookServiceView(){
        return view('book-a-service');
    }

    // for keeper form 
    public function KeeperFormView(){
        return view('keeper-form');
    }
    // for keeper thankyou page 
    public function KeeperThankView(){
        return view('keeper-thankyou');
    }

    // for blog 1 
    public function BlogOneView(){
        return view('blog-1');
    }
    // for second blog 
    public function BlogTwoNew(){
        return view('blog-2');
    }
    // for third blog 
    public function BlogThreeNew(){
        return view('blog-3');
    }
    // for property 1st form
    public function PropertyFormView(){
        return view('property-form1');
    }
    // for property date form
    public function PropertyDateFormView(){
        return view('property-booking-date');
    }
    // for property thanks you 
    public function PropertythankView(){
        return view('property-thank');
    }





}
