<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ==========================================
// RUTAS PÚBLICAS
// ==========================================
$routes->get('/', 'Home::index');
$routes->get('/buscar', 'Home::buscar');
$routes->get('/planes', 'Home::planes');

$routes->view('/registro', 'signup'); 
$routes->get('/categorias/peliculas', 'Categorias::peliculas');
$routes->get('/categorias/series', 'Categorias::series');
$routes->get('/detalles/(:num)', 'Detalles::index/$1'); 

// Checkout
$routes->get('/checkout/(:num)', 'Checkout::index/$1');
$routes->post('/checkout/procesar', 'Checkout::procesar');

// ==========================================
// RUTAS DEL PERFIL DE USUARIO (¡Estas faltaban!)
// ==========================================
$routes->get('/perfil', 'Perfil::index');
$routes->post('/perfil/actualizar', 'Perfil::actualizar');
$routes->post('/perfil/subir_foto', 'Perfil::subir_foto');


// ==========================================
// RUTAS DE AUTENTICACIÓN (LOGIN)
// ==========================================
$routes->get('/login', 'Login::index');
$routes->post('/login/autenticar', 'Login::autenticar');
$routes->get('login/salir', 'Login::logout');


// ==========================================
// RUTAS DEL PANEL ADMINISTRADOR
// ==========================================
$routes->get('/admin/dashboard', 'Login::dashboard'); 

// CRUD DE USUARIOS
$routes->get('/admin/usuarios', 'Usuarios::index');
$routes->post('/admin/usuarios/guardar', 'Usuarios::guardar');
$routes->post('/admin/usuarios/actualizar', 'Usuarios::actualizar');
$routes->get('/admin/usuarios/eliminar/(:num)', 'Usuarios::eliminar/$1');

// CRUD DE GÉNEROS
$routes->get('/admin/generos', 'Generos::index');
$routes->post('/admin/generos/guardar', 'Generos::guardar');
$routes->post('/admin/generos/actualizar', 'Generos::actualizar');
$routes->get('/admin/generos/eliminar/(:num)', 'Generos::eliminar/$1');

// CRUD DE PLANES
$routes->get('/admin/planes', 'Planes::index');
$routes->get('/admin/planes/crear', 'Planes::crear');
$routes->post('/admin/planes/guardar', 'Planes::guardar');
$routes->get('/admin/planes/editar/(:num)', 'Planes::editar/$1');
$routes->post('/admin/planes/actualizar/(:num)', 'Planes::actualizar/$1');
$routes->get('/admin/planes/cambiar_estatus/(:num)/(:any)', 'Planes::cambiar_estatus/$1/$2');
$routes->get('/admin/planes/eliminar/(:num)', 'Planes::eliminar/$1');

// CRUD DE STREAMING
$routes->get('/admin/streaming', 'Streaming::index');
$routes->get('/admin/streaming/crear', 'Streaming::crear');
$routes->post('/admin/streaming/guardar', 'Streaming::guardar');
$routes->get('/admin/streaming/editar/(:num)', 'Streaming::editar/$1');
$routes->post('/admin/streaming/actualizar/(:num)', 'Streaming::actualizar/$1');
$routes->get('/admin/streaming/eliminar/(:num)', 'Streaming::eliminar/$1');
$routes->get('/admin/streaming/cambiar_estatus/(:num)/(:any)', 'Streaming::cambiar_estatus/$1/$2');

// CRUD DE VIDEOS
$routes->get('/admin/videos', 'Videos::index');
$routes->get('/admin/videos/crear', 'Videos::crear');
$routes->post('/admin/videos/guardar', 'Videos::guardar');
$routes->get('/admin/videos/editar/(:num)', 'Videos::editar/$1');
$routes->post('/admin/videos/actualizar/(:num)', 'Videos::actualizar/$1');
$routes->get('/admin/videos/cambiar_estatus/(:num)/(:any)', 'Videos::cambiar_estatus/$1/$2');
$routes->get('/admin/videos/eliminar/(:num)', 'Videos::eliminar/$1');

// ==========================================
// RUTAS EXCLUSIVAS DEL OPERADOR
// ==========================================
// Módulo de Clientes
$routes->get('/admin/clientes', 'Clientes::index');
$routes->post('/admin/clientes/actualizar', 'Clientes::actualizar');
$routes->get('/admin/clientes/cambiar_estatus/(:num)/(:any)', 'Clientes::cambiar_estatus/$1/$2');

// Módulo de Validar Pagos
$routes->get('/admin/pagos', 'Pagos::index');
$routes->get('/admin/pagos/cambiar_estatus/(:num)/(:any)', 'Pagos::cambiar_estatus/$1/$2'); 