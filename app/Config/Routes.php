<?php

use CodeIgniter\Router\RouteCollection;

/**
 * Routes — Soal 02
 * Mendefinisikan seluruh jalur akses menu pada aplikasi Web Profile TechClub.
 *
 * @var RouteCollection $routes
 */

// -----------------------------------------------------------------------
// Public Routes — dapat diakses oleh Guest maupun Admin
// -----------------------------------------------------------------------
$routes->get('/', 'Home::beranda');
$routes->get('/beranda', 'Home::beranda');
$routes->get('/tentang', 'Home::tentang');
$routes->get('/galeri', 'Home::galeri');

// -----------------------------------------------------------------------
// Auth Routes — halaman login & logout
// -----------------------------------------------------------------------
$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

// -----------------------------------------------------------------------
// Protected Routes — hanya Admin (sudah login) yang bisa akses — Soal 02
// -----------------------------------------------------------------------
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/dashboard', 'Home::dashboard');
    $routes->get('/kegiatan', 'Home::kegiatan');
    $routes->get('/kontak', 'Home::kontak');
});
