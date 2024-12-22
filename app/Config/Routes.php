<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\DashboardAdmin::index');

// Pasang Baru
$routes->get('/dashboard-pb', 'Admin\DashboardPB::index');
$routes->get('/data-pelanggan-pb', 'Admin\PasangBaruAdmin::index');
$routes->get('/tambah-data-pb', 'Admin\PasangBaruAdmin::tambah');
$routes->post('/simpan-data-pb', 'Admin\PasangBaruAdmin::simpan');
$routes->get('/tindak-lanjut-pb', 'Admin\TindakLanjutAdminPB::index');
$routes->get('/selesai-pb', 'Admin\SelesaiPB::index');


// Perubahan Daya
$routes->get('/dashboard-pd', 'Admin\DashboardPD::index');
$routes->get('/data-pelanggan-pd', 'Admin\PerubahanDayaAdmin::index');
$routes->get('/tambah-data-pd', 'Admin\PerubahanDayaAdmin::tambah');
$routes->post('/simpan-data-pd', 'Admin\PerubahanDayaAdmin::simpan');
$routes->get('/tindak-lanjut-pd', 'Admin\TindakLanjutAdminPD::index');
$routes->get('/selesai-pd', 'Admin\SelesaiPD::index');


// Pengguna
$routes->get('/pengguna', 'Admin\Pengguna::index');
$routes->get('/tambah-pengguna', 'Admin\Pengguna::tambah');
$routes->post('/simpan-pengguna', 'Admin\Pengguna::simpan');
