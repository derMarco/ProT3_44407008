<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','Home::index');
$routes->get('principal','Home::index');
$routes->get('sobre_nosotros','Home::quienes_somos');
$routes->get('acerca_de','Home::acerca_de');
$routes->get('registrarse','Home::registrarse');
$routes->get('login','Home::login');

$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');


$routes->get('/login','login_controller');
$routes->post('/enviarLogin','login_controller::auth');
$routes->get('/panel','panel_controller::index',['filter'=>'auth']);
$routes->get('/logout','login_controller::logout');



?>