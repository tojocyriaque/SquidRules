<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\LogProxy;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->get('listlog', [LogProxy::class, 'list']);
$routes->get('delete', [LogProxy::class, 'delete']);
