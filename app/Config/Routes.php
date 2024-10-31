<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login');

// routes dashboard
$routes->get('dashboard', 'Admin\DashboardController::index', ['filter' => 'auth']);

//routes panduan
$routes->get('panduan', 'Admin\PanduanController::index', ['filter' => 'auth']);

// Rute untuk menampilkan PDF dari PanduanController
$routes->get('Admin/PanduanController/displayPdf', 'Admin\PanduanController::displayPdf', ['filter' => 'auth']);

//routes daftar
$routes->get('daftar', 'Admin\DaftarController::index', ['filter' => 'auth']);
$routes->get('daftar_orderan', 'Admin\DaftarController::daftar_orderan', ['filter' => 'auth']);

//routes buat order 
$routes->get('order', 'Admin\BuatController::index', ['filter' => 'auth']);
$routes->post('buat/create', 'Admin\BuatController::create', ['filter' => 'auth']);

$routes->get('/login', 'AuthController::login');
$routes->post('/auth/attemptLogin', 'AuthController::attemptLogin');
$routes->get('/logout', 'AuthController::logout');

$routes->group('superadmin', ['filter' => 'auth'], function($routes) {
    $routes->get('home', 'SuperAdmin\HomeController::index');
    $routes->get('orders', 'SuperAdmin\OrderController::index');
    $routes->get('order/updateStatus/(:num)/(:alpha)', 'SuperAdmin\OrderController::updateStatus/$1/$2');
    $routes->get('orders/incoming', 'Superadmin\OrderController::incoming');
    $routes->get('orders/completed', 'superadmin\OrderController::completed');
});

