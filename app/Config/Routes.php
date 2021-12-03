<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Pages::home');
$routes->get('/graphic-design', 'Pages::graphic_design');
$routes->get('/alarm-systems', 'Pages::alarm');
$routes->get('/electrical-fence', 'Pages::electrical');
$routes->get('/computer-maintenence', 'Pages::computer');
$routes->get('/biometric-systems', 'Pages::biometric');
$routes->get('/it-support', 'Pages::it_support');
$routes->get('/web-design', 'Pages::web_design');
$routes->get('/cloud-services', 'Pages::cloud');
$routes->get('/network-installation', 'Pages::network');
$routes->get('contact', 'Contact::index');



$routes->get('admin', 'Dashboard::index');
$routes->get('admin/post-create', 'Dashboard::create_post');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
