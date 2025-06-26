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


$routes->get('registrar', 'usuario_controller::create');
$routes->post('usuario_controller/formValidation', 'usuario_controller::formValidation');


$routes->get('/login', 'Login_controller');
$routes->post('/enviarlogin','Login_controller::auth');
$routes->get('/panel', 'Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');

$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);

