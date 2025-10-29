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
// $routes->get('blogs','Home::BlogListing');   
$routes->get('blogs', 'Home::BlogListing');
$routes->get('(:segment)', 'Home::BlogDetail/$1');

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

$routes->get('/zooming-in-cleaning-habit-unlocked-self-worth-inner-peace','Home::BlogFourNew');


$routes->post('/contact-function','Functions::ContactFunction');
$routes->post('/keeper-form-submit','Functions::KeeperFormSubmit');
$routes->post('/property-form-submit','Functions::PropertyFormSubmit');
$routes->post('/property-date-submit','Functions::PropertyDateSubmit');
$routes->post('/registration-submit','Functions::RegistrationSubmit');
$routes->get('/test-registration-route','Functions::TestRegistrationRoute');
// $routes->get('/robots.txt','Functions::Robot');
// $routes->get('/sitemap.xml','Functions::Sitemap');
$routes->get('robots.txt', 'Home::robot');
$routes->get('sitemap.xml', 'Home::sitemap');

$routes->get('/test-registration-route','Functions::TestRegistrationRoute');
$routes->post('/subscribe','Functions::Subscribe');
// Admin routes
$routes->group('admin', function($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('login', 'Admin::login');
    $routes->post('authenticate', 'Admin::authenticate');
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('logout', 'Admin::logout');
    $routes->get('lead-manager','Admin::LeadManagerView');
    $routes->post('update-lead-status', 'Admin::updateLeadStatus');
    
    // Blog Management Routes
    $routes->get('blog-list', 'Admin::blogList');
    $routes->get('blog-add', 'Admin::blogAdd');
    $routes->get('blog-edit/(:num)', 'Admin::blogEdit/$1');
    $routes->post('blog-save', 'Admin::blogSave');
        $routes->post('blog-update/(:num)', 'Admin::blogUpdate/$1');
        $routes->get('blog-delete/(:num)', 'Admin::blogDelete/$1');
        $routes->post('upload-image', 'Admin::uploadImage');
    
});


$routes->view('/office-cleaning-cheltenham','landing1');
$routes->view('/end-of-tenancy-cleaning','landing2');
$routes->view('/maid-service','landing3');
$routes->view('/building-cleaning-cheltenham','landing4');
$routes->view('/student-accommodation-cleaning','landing5');