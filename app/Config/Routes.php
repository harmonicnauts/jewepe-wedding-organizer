<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::home');
$routes->get('about', 'Pages::about');
$routes->get('catalogue', 'Pages::catalogue');
$routes->get('login', 'AuthController::login');
$routes->post('auth/authenticate', 'AuthController::authenticate');
$routes->get('register', 'AuthController::register');
$routes->post('auth/register', 'AuthController::store');
$routes->get('auth/logout', 'AuthController::logout');


$routes->group('admin', ['filter' => 'auth', 'namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('users', 'AdminController::users');
    $routes->match(['get', 'post'], 'adduser', 'AdminController::addUser');
    $routes->get('catalogue', 'AdminController::catalogue');
    $routes->match(['get', 'post'], 'addpackage', 'AdminController::addPackage');
    $routes->post('updatepackage/(:num)', 'AdminController::updatePackage/$1');
    $routes->post('deletepackage/(:num)', 'AdminController::deletePackage/$1');
});






// $routes->get('admin/dashboard', 'Admin\AdminController::dashboard');
// $routes->get('admin/users', 'Admin\AdminController::users');
// $routes->get('admin/adduser', 'Admin\AdminController::addUser');
// $routes->post('admin/adduser', 'Admin\AdminController::addUser');
// $routes->get('admin/catalogue', 'Admin\AdminController::catalogue');
// $routes->get('admin/addpackage', 'Admin\AdminController::addPackage');
// $routes->post('admin/addpackage', 'Admin\AdminController::addPackage');
// $routes->post('admin/updatepackage/(:num)', 'Admin\AdminController::updatePackage/$1');
// $routes->post('admin/deletepackage/(:num)', 'Admin\AdminController::deletePackage/$1');

// $routes->get('admin/profile', 'Admin\AdminController::profile');

// $routes->get('admin/orders', 'Admin\AdminController::orders');
// $routes->get('admin/editOrderStatus/(:num)', 'AdminController::editOrderStatus/$1', ['filter' => 'auth:admin']);
// $routes->post('admin/updateOrderStatus/(:num)', 'AdminController::updateOrderStatus/$1', ['filter' => 'auth:admin']);

// $routes->get('admin/reports', 'Admin\AdminController::reportForm');
// $routes->post('admin/generateReport', 'AdminController::generateReport', ['filter' => 'auth:admin']);


// $routes->get('user/profile', 'UserController::profile', ['filter' => 'auth']);
// $routes->get('user/booking', 'UserController::booking', ['filter' => 'auth']);
// $routes->post('user/bookPackage', 'UserController::bookPackage', ['filter' => 'auth']);
