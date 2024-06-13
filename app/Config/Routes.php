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
$routes->get('auth/logout', 'AuthController::logout');


$routes->get('admin/dashboard', 'Admin\AdminController::dashboard');

$routes->get('admin/users', 'Admin\AdminController::users');
$routes->get('admin/adduser', 'Admin\AdminController::addUser');
$routes->post('admin/adduser', 'Admin\AdminController::addUser');

$routes->get('admin/catalogue', 'Admin\AdminController::catalogue');
$routes->get('admin/addPackage', 'AdminController::addPackage', ['filter' => 'auth:admin']);
$routes->get('admin/editPackage/(:num)', 'AdminController::editPackage/$1', ['filter' => 'auth:admin']);
$routes->post('admin/updatePackage/(:num)', 'AdminController::updatePackage/$1', ['filter' => 'auth:admin']);
$routes->delete('admin/deletePackage/(:num)', 'AdminController::deletePackage/$1', ['filter' => 'auth:admin']);

$routes->get('admin/profile', 'Admin\AdminController::profile');

$routes->get('admin/orders', 'Admin\AdminController::orders');
$routes->get('admin/editOrderStatus/(:num)', 'AdminController::editOrderStatus/$1', ['filter' => 'auth:admin']);
$routes->post('admin/updateOrderStatus/(:num)', 'AdminController::updateOrderStatus/$1', ['filter' => 'auth:admin']);

$routes->get('admin/reports', 'Admin\AdminController::reportForm');
$routes->post('admin/generateReport', 'AdminController::generateReport', ['filter' => 'auth:admin']);


$routes->get('user/profile', 'UserController::profile', ['filter' => 'auth']);
$routes->get('user/booking', 'UserController::booking', ['filter' => 'auth']);
$routes->post('user/bookPackage', 'UserController::bookPackage', ['filter' => 'auth']);
