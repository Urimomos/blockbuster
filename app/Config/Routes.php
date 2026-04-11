<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->view('/login', 'login');
$routes->view('/registro', 'signup'); 
$routes->view('/categorias/peliculas', 'categories');
$routes->view('/categorias/series', 'series');
$routes->view('/detalles', 'streaming_detalles');

$routes->view('/planes', 'planes');

$routes->get('/login', 'Login::index');

// Procesar el formulario cuando se le da clic a "Entrar"
$routes->post('/login/autenticar', 'Login::autenticar');

// Cerrar sesión
$routes->get('/logout', 'Login::logout');

// Ruta protegida de prueba para el administrador
$routes->get('/admin/dashboard', function() {
    // Pequeño candado de seguridad: si no hay sesión, regresalo al login
    if (!session()->get('is_logged_in')) {
        return redirect()->to(base_url('login'));
    }
    return view('admin/dashboard');
});