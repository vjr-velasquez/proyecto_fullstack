<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


//rutas estadia
$routes->get('estadia','EstadiaController::index');
$routes->post('agregar_estadia','EstadiaController::agregarEstadia');       
$routes->get('eliminar_estadia/(:num)', 'EstadiaController::eliminar/$1');
$routes->get('buscar_estadia/(:num)', 'EstadiaController::buscar/$1');
$routes->post('editar_estadia','EstadiaController::editar');

 