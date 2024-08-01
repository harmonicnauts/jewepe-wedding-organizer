<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::home');
$routes->get('about', 'Pages::about');
$routes->get('catalogue', 'Pages::catalogue');
$routes->get('login', 'AuthController::login');
$routes->get('register', 'AuthController::register');
$routes->post('auth/authenticate', 'AuthController::authenticate');
$routes->post('auth/register', 'AuthController::store');
$routes->get('auth/logout', 'AuthController::logout');

$routes->group('user', ['filter' => 'userauth', 'namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('order/(:num)', 'UserController::order/$1');
    $routes->post('order/(:num)', 'UserController::saveOrder/$1');

    $routes->get('history/(:num)', 'UserController::history/$1');
    $routes->get('history-detail/(:num)', 'UserController::historyDetail/$1');
});



$routes->group('admin', ['filter' => 'adminauth', 'namespace' => 'App\Controllers\Admin'], function ($routes) {

    $routes->get('dashboard', 'AdminController::dashboard');

    $routes->get('users', 'AdminController::users');
    $routes->get('add-user', 'AdminController::addUserPage');
    $routes->post('add-user', 'AdminController::addUserAction');
    $routes->get('update-user/(:num)', 'AdminController::updateUserPage/$1');
    $routes->put('update-user/(:num)', 'AdminController::updateUserAction/$1');
    $routes->delete('update-user/(:num)', 'AdminController::deleteUserAction/$1');

    $routes->get('packages', 'AdminController::packages'); // All packages
    $routes->get('add-package', 'AdminController::addPackagePage'); // Add package pages
    $routes->post('add-package', 'AdminController::addPackageAction'); // Add packages action
    $routes->get('update-package/(:num)', 'AdminController::updatePackagePage/$1'); // Update Package Page
    $routes->put('update-package/(:num)', 'AdminController::updatePackageAction/$1'); // Update Package Action
    $routes->delete('update-package/(:num)', 'AdminController::deletePackageAction/$1'); // Delete Package

    $routes->get('orders', 'AdminController::orders');
    $routes->put('changeorderstatus/(:num)', 'AdminController::changeOrderStatus/$1');
    $routes->put('deleteorder/(:num)', 'AdminController::deleteOrder/$1');

    $routes->get('profile', 'AdminController::profile');
    $routes->post('profile', 'AdminController::updateProfInfo');

    $routes->get('reports', 'AdminController::report');
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
