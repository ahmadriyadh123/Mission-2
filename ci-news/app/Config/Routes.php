<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa/create', 'MahasiswaController::create');
$routes->post('/mahasiswa/store', 'MahasiswaController::store');
$routes->get('/mahasiswa/edit/(:num)', 'MahasiswaController::edit/$1');
$routes->post('/mahasiswa/update/(:num)', 'MahasiswaController::update/$1');
$routes->post('/mahasiswa/delete/(:num)', 'MahasiswaController::delete/$1');
$routes->get('/mahasiswa/(:num)', 'MahasiswaController::detail/$1');
$routes->get('/mahasiswa', 'MahasiswaController::index');
