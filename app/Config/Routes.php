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
//eliminar
$routes->get('d/(:num)', 'C_carros::eliminar/$1');