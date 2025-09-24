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