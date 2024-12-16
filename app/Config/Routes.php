<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\DashboardAdmin::index');

// Pasang Baru
$routes->get('/dashboard-pb', 'Admin\PasangBaruAdmin::index');
$routes->get('/data-pelanggan-pb', 'Admin\PasangBaruAdmin::index');
$routes->get('/tambah-data-pb', 'Admin\PasangBaruAdmin::index');

// Perubahan Daya
$routes->get('/dashboard-pd', 'Admin\PerubahanDayaAdmin::index');
$routes->get('/data-pelanggan-pd', 'Admin\PerubahanDayaAdmin::index');
$routes->get('/tambah-data-pd', 'Admin\PerubahanDayaAdmin::index');

// Pengguna
$routes->get('/pengguna', 'Admin\Pengguna::index');
$routes->get('/tambah_pengguna', 'Admin\Pengguna::index');
