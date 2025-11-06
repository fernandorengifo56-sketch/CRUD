<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
//tabla
$routes->get('r', 'c_carros::index');
//crear
$routes->get('c', 'c_carros::crear');
//guardar
$routes->post('agregar', 'C_carros::agregar');


<<<<<<< HEAD




















//update
=======
//eliminar
$routes->get('d/(:num)', 'C_carros::eliminar/$1');

//update

$routes->post('actualizar', 'C_carros::actualizar');


$routes->get('editar/(:num)', 'C_carros::editar/$1');
>>>>>>> parent of 8863f10 (validaciones)

$routes->post('actualizar', 'C_carros::actualizar');


$routes->get('editar/(:num)', 'C_carros::editar/$1');