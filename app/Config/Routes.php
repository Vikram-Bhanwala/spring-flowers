<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('select-property-type','Home::SelectProp_type_view');
$routes->get('select-keeper-type','Home::Selectkeep_type_view');
$routes->get('house-cleaning','Home::HouseCleaningView');
$routes->get('privacy-policy','Home::PrivacyPolicy');
$routes->get('blogs','Home::BlogListing');
$routes->get('our-story','Home::OurStoryView');
$routes->get('shop','Home::ShopView');
$routes->get('find-a-job','Home::JoinView');
$routes->get('register','Home::RegisterView');
$routes->get('thankyou','Home::Thankyou');
$routes->get('book-service','Home::BookServiceView');
$routes->get('keeper-form','Home::KeeperFormView');
$routes->get('keeper-thankyou','Home::KeeperThankView');
$routes->get('springflower-difference-building-trust-home-cleaning','Home::BlogOneView');
$routes->get('10-essential-guidelines-for-becoming-a-superior-housekeeper','Home::BlogTwoNew');
$routes->get('zooming-out-technique-elevate-home-presentation','Home::BlogThreeNew');
$routes->get('property-form','Home::PropertyFormView');
$routes->get('property-date','Home::PropertyDateFormView');
$routes->get('property-thank-you','Home::PropertythankView');



$routes->post('/contact-function','Functions::ContactFunction');
$routes->post('/keeper-form-submit','Functions::KeeperFormSubmit');
$routes->post('/subscribe','Functions::Subscribe');

// Admin routes
$routes->group('admin', function($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('login', 'Admin::login');
    $routes->post('authenticate', 'Admin::authenticate');
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('logout', 'Admin::logout');
    $routes->get('lead-manager','Admin::LeadManagerView');
});