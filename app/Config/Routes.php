<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin\DashboardAdmin::index');

$routes->get('/data-pelanggan-pb', 'Admin\PasangBaruAdmin::index');
