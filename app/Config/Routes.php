<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// app/Config/Routes.php

// Route untuk halaman publik (tanpa filter)
$routes->get('/', 'User::index'); // Contoh: HomeController untuk landing page

// Route yang memerlukan login dan role
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/siswa', 'Siswa::index', ['filter' => 'role:siswa']);

 $routes->get('/user/tentang', 'User::about');
 $routes->get('/user/kegiatan', 'User::kegiatan');
 $routes->get('/user/galeri', 'User::galeri');
 $routes->get('/user/jadwal', 'User::jadwal');
 $routes->get('/user/kontak', 'User::kontak');
 
 // Login
 $routes->get('/login/signin', 'Login::index');


