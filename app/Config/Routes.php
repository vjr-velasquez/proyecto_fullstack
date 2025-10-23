<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', 'Home::login');
$routes->post('validacion', 'LoginUserController::index');


//rutas estadia
$routes->get('estadia','EstadiaController::index');
$routes->post('agregar_estadia','EstadiaController::agregarEstadia');       
$routes->get('eliminar_estadia/(:num)', 'EstadiaController::eliminar/$1');
$routes->get('buscar_estadia/(:num)', 'EstadiaController::buscar/$1');
$routes->post('editar_estadia','EstadiaController::editar');

 


//rutas tipos_usuarios
$routes->get ('tipos_usuarios','TipoUsuarioController::index');
$routes->post('agregar_tipo_usuario','TipoUsuarioController::aregarTipoUsuario');
$routes->get('eliminar_tipo_usuario/(:num)', 'TipoUsuarioController::eliminar/$1');
$routes->get('buscar_tipo_usuario/(:num)', 'TipoUsuarioController::buscar/$1');
$routes->post('editar_tipo_usuario','TipoUsuarioController::editar');   



//rutas tarifa
$routes->get ('tarifa','TarifaController::index');
$routes->post('agregar_tarifa','TarifaController::agregarTarifa');      
$routes->get('eliminar_tarifa/(:num)', 'TarifaController::eliminar/$1');    
$routes->get('buscar_tarifa/(:num)', 'TarifaController::buscar/$1');
$routes->post('editar_tarifa','TarifaController::editar');      



//rutas usuarios
$routes->get('usuarios','UsuarioControler::index');
$routes->post('agregar_usuario','UsuarioControler::agregarUsuario');    
$routes->get('eliminar_usuario/(:num)', 'UsuarioControler::eliminar/$1');
$routes->get('buscar_usuario/(:num)', 'UsuarioControler::buscar/$1');
$routes->post('editar_usuario','UsuarioControler::editar');     



//rutas estadia vehiculo
$routes->get('estadia_vehiculo','EstadiaVehiculoController::index');
$routes->post('agregar_estadia_vehiculo','EstadiaVehiculoController::agregarEstadiaVehiculo')   ;     
$routes->get('eliminar_estadia_vehiculo/(:num)', 'EstadiaVehiculoController::eliminar/$1');
$routes->get('buscar_estadia_vehiculo/(:num)', 'EstadiaVehiculoController::buscar/$1');
$routes->post('editar_estadia_vehiculo','EstadiaVehiculoController::editar');           



//rutas carriles 
$routes->get('carriles','CarrilController::index');
$routes->post('agregar_carril','CarrilController::agregarCarril');      
$routes->get('eliminar_carril/(:num)', 'CarrilController::eliminar/$1');
$routes->get('buscar_carril/(:num)', 'CarrilController::buscar/$1');
$routes->post('editar_carril','CarrilController::editar');



// rutas empleados
$routes->get('empleados','EmpleadoController::index');      
$routes->post('agregar_empleado','EmpleadoController::agregarEmpleado');      
$routes->get('eliminar_empleado/(:num)', 'EmpleadoController::eliminar/$1');
$routes->get('buscar_empleado/(:num)', 'EmpleadoController::buscar/$1');
$routes->post('editar_empleado','EmpleadoController::editar');  
$routes->get('actualizar/(:num)', 'EmpleadoController::actualizar/$1');




// rutas control de pagos
$routes->get('control_pagos','ControlPagosController::index');
$routes->post('agregar_control_pago','ControlPagosController::agregarControlPago');      
$routes->get('eliminar_control_pago/(:num)', 'ControlPagosController::eliminar/$1');
$routes->get('buscar_control_pago/(:num)', 'ControlPagosController::buscar/$1');
$routes->post('editar_control_pago','ControlPagosController::editar');  



// rutas usuarios fijos 
$routes->get('usuarios_fijos','UsuarioFijoController::index');
$routes->post('agregar_usuario_fijo','UsuarioFijoController::agregarUsuarioFijo');      
$routes->get('eliminar_usuario_fijo/(:num)', 'UsuarioFijoController::eliminar/$1');
$routes->get('buscar_usuario_fijo/(:num)', 'UsuarioFijoController::buscar/$1'); 
$routes->post('editar_usuario_fijo','UsuarioFijoController::editar');       



//rutas facturas
$routes->get('facturas','FacturaController::index');
$routes->post('agregar_factura','FacturaController::agregarFactura');      
$routes->get('eliminar_factura/(:num)', 'FacturaController::eliminar/$1');      
$routes->get('buscar_factura/(:num)', 'FacturaController::buscar/$1');
$routes->post('editar_factura','FacturaController::editar');        



//rutas vehiculos
$routes->get('vehiculos','VehiculoController::index');  
$routes->post('agregar_vehiculo','VehiculoController::agregarVehiculo');      
$routes->get('eliminar_vehiculo/(:num)', 'VehiculoController::eliminar/$1');
$routes->get('buscar_vehiculo/(:num)', 'VehiculoController::buscar/$1');
$routes->post('editar_vehiculo','VehiculoController::editar');  



//rutas tipo de pagp
$routes->get('tipo_pago','TipoPagoController::index');
$routes->post('agregar_tipo_pago','TipoPagoController::agregarTipoPago');           
$routes->get('eliminar_tipo_pago/(:num)', 'TipoPagoController::eliminar/$1');
$routes->get('buscar_tipo_pago/(:num)', 'TipoPagoController::buscar/$1');   
$routes->post('editar_tipo_pago','TipoPagoController::editar'); 



//rutas marcas 
$routes->get('marcas','MarcaController::index');
$routes->post('agregar_marca','MarcaController::agregarMarca'); 
$routes->get('eliminar_marca/(:num)', 'MarcaController::eliminar/$1');  
$routes->get('buscar_marca/(:num)', 'MarcaController::buscar/$1');   
$routes->post('editar_marca','MarcaController::editar');

