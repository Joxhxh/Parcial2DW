<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * 
 */


/*http://localhost/Parcial2DW*/
$routes->get('/', 'Home::index');

/*http://localhost/Parcial2DW/CVistaF1*/
$routes->get('/CVistaF1', 'CVistas::MMostrar1');

/*http://localhost/Parcial2DW/CFormF1*/
$routes->get('/CFormF1', 'CForms::MMostrar1');

/*http://localhost/Parcial2DW/CResultF1*/
$routes->get('/CResultF1', 'CResultado::MMostrar1');