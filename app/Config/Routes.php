<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->view('/login', 'login');
$routes->view('/registro', 'signup'); 
$routes->get('/categorias/peliculas', 'Categorias::peliculas');
$routes->get('/categorias/series', 'Categorias::series');
$routes->view('/detalles', 'streaming_detalles');
$routes->get('/buscar', 'Home::buscar');

$routes->get('/planes', 'Home::planes');

$routes->get('/login', 'Login::index');

$routes->get('/checkout/(:num)', 'Checkout::index/$1');
$routes->post('/checkout/procesar', 'Checkout::procesar');

$routes->get('/admin/generos', 'Generos::index');
$routes->post('/admin/generos/guardar', 'Generos::guardar');
$routes->post('/admin/generos/actualizar', 'Generos::actualizar');

// ==========================================
// RUTAS DEL PANEL ADMINISTRABLE
// ==========================================
$routes->get('/admin/dashboard', 'Login::dashboard'); // La que ya teníamos de prueba

// CRUD DE PLANES
$routes->get('/admin/planes', 'Planes::index');
$routes->get('/admin/planes/crear', 'Planes::crear');
$routes->post('/admin/planes/guardar', 'Planes::guardar');
$routes->get('/admin/planes/editar/(:num)', 'Planes::editar/$1');
$routes->post('/admin/planes/actualizar/(:num)', 'Planes::actualizar/$1');
$routes->get('/admin/planes/cambiar_estatus/(:num)/(:any)', 'Planes::cambiar_estatus/$1/$2');

$routes->get('/admin/usuarios', 'Usuarios::index');
$routes->post('/admin/usuarios/guardar', 'Usuarios::guardar');
$routes->post('/admin/usuarios/actualizar', 'Usuarios::actualizar');

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