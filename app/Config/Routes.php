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


//Main Site
$routes->get('/', 'Pages::home');
$routes->get('/graphic-design', 'Pages::graphic_design');
$routes->get('/alarm-systems', 'Pages::alarm');
$routes->get('/electrical-fence', 'Pages::electrical');
$routes->get('/computer-maintenance', 'Pages::computer');
$routes->get('/biometric-systems', 'Pages::biometric');
$routes->get('/it-support', 'Pages::it_support');
$routes->get('/web-design', 'Pages::web_design');
$routes->get('/cloud-services', 'Pages::cloud');
$routes->get('/network-installation', 'Pages::network');
$routes->get('/contact', 'Contact::index');

// User Management
$routes->get('dashboard/signup', 'SignupController::index');
$routes->post('dashboard/signup', 'SignupController::store');
$routes->get('dashboard/signin', 'SigninController::index');
$routes->post('dashboard/signin', 'SigninController::loginAuth');
$routes->get('dashboard/logout', 'SigninController::logout');


// Dashboard
$routes->match(['get', 'post'], '/dashboard/post-create', 'Posts::create', ['filter' => 'authGuard']);
$routes->get('/dashboard/posts/(:segment)', 'Posts::view/$1');
$routes->get('/dashboard/post-delete/(:segment)', 'Posts::delete/$1');
$routes->post('/dashboard/post-update', 'Posts::update');
$routes->get('/dashboard/posts', 'Posts::index', ['filter' => 'authGuard']);


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
