<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'auth']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('/menu', 'MenuController::index', ['filter' => 'auth']);
$routes->get('/keranjang', 'TransaksiController::index', ['filter' => 'auth']);

$routes->group('product', function ($routes) {
  $routes->get('/', 'ProductController::index');
  $routes->get('create', 'ProductController::create');
  $routes->post('store', 'ProductController::save');
  $routes->get('edit/(:num)', 'ProductController::edit/$1');
  $routes->post('update/(:num)', 'ProductController::update/$1');
  $routes->post('delete/(:num)', 'ProductController::delete/$1');
});
