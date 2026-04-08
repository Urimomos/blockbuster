<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rutas directas a las Vistas (Truco para verlas sin crear el Controlador aún)
$routes->view('/login', 'login');

// Nota: Si guardaste el archivo del paso anterior como signup.php usa esto:
$routes->view('/registro', 'signup'); 
// Si lo guardaste como registro.php, entonces usa: $routes->view('/registro', 'registro');
