<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('principal', 'Home::index');

$routes->get('miembros-aeroclub', 'Home::miembros');

$routes->get('servicios', 'Home::servicios');

$routes->get('registrar', 'Home::registro');

$routes->get('iniciar-sesion', 'Home::inicioSesion');