<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('empleados','EmpleadoController::index');
$routes->post('agregarEmpleado','EmpleadoController::agregarEmpleado');
$routes->get('eliminar/(:num)','EmpleadoController::eliminar/$1');
$routes->get('actualizar/(:num)','EmpleadoController::actualizar/$1');
