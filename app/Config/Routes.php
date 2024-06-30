<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('/{locale}', 'Main::index');
$routes->get('{locale}/list', 'Main::list');
