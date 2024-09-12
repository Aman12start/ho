<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// $routes->get('/residential','Home::resi');
// $routes->get('/commercial','Home::comm');

$routes->get('/', 'Home::index');
$routes->get('/about','About::abot');
$routes->get('/desk','Desk::dsk');
$routes->get('/events','Event::evnt');
// $routes->get('/contact','contact::contct');
$routes->get('/disclaimer','Disclaimer::disclmr');
$routes->get('/privacy','Privacy::privcy');
// $routes->get('/contactusdata','contact::contactusdata');
$routes->get('/servicepage/(:any)','servicepage::servicepages/$1');

$routes->get('/contact', 'Contact::contact');  // Route to load the contact form
$routes->post('/contactusdata', 'Contact::contactusdata');  // Route to handle form submission

