<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('estadia', 'EstadiaController::estadia');
$routes->post('/calcular-estadia', 'EstadiaController::calcular');
