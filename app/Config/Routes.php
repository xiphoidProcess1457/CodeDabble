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
//$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index/$1');
$routes->get('/', 'AskQuestion::index/$1');
$routes->get('/home', 'Home::index',['filter' => 'auth']);
$routes->get('/home', 'Home::index',['filter' => 'auth']);
$routes->get('/AskQuestion', 'AskQuestion::index/$1',['filter' => 'auth']);
$routes->get('/AskQuestion', 'AskQuestion::index/$1');
$routes->get('/AskQuestion/forum', 'AskQuestion::forum');
$routes->match(['get', 'post'], '/AskQuestion/forum', 'AskQuestion::forum');
$routes->get('/Admin', 'Admin::index/$1');
$routes->post('AskQuestion/savereply/(:num)', 'AskQuestion::savereply/$1');
//$routes->post('AskQuestion/test/(:num)', 'AskQuestion::test/$1');
//$routes->get('/askquestion/store', 'AskQuestion::store');
$routes->match(['get', 'post'], '/askquestion/store', 'AskQuestion::store/$1');
$routes->get('/askquestion/post', 'AskQuestion::post/$1');
$routes->get('/forumreply', 'AskQuestion::forumreply');
$routes->get('/post', 'AskQuestion::forumreply');
$routes->get('/', 'AskQuestion::index');
//$routes->get('/Profile/post', 'AskQuestion::post/$1');
$routes->get('/', 'Profile::index/$1');
$routes->get('/', 'Forum::index/$1');
$routes->post('update', 'Profile::update');
$routes->get('Profile/editprofile/(:num)', 'Profile::editprofile/$1');
$routes->get('Admin/edit/(:num)', 'Admin::edit/$1');
$routes->post('update', 'Admin::update');
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
