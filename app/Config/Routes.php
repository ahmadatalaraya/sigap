<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\DashboardController::index');

// routes dashboard
$routes->get('dashboard', 'Admin\DashboardController::index');

//routes panduan
$routes->get('panduan', 'Admin\PanduanController::index');

// Rute untuk menampilkan PDF dari PanduanController
$routes->get('Admin/PanduanController/displayPdf', 'Admin\PanduanController::displayPdf');
 


//routes daftar
$routes->get('daftar', 'Admin\DaftarController::index');
$routes->get('daftar_orderan', 'Admin\DaftarController::daftar_orderan');

//routes buat order 
$routes->get('order', 'Admin\BuatController::index');
$routes->post('buat/create', 'Admin\BuatController::create');

