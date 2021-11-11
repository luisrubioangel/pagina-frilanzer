<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PaginaControllers;

$router = new Router();


/* administrar las pestañas */
$router->get('/', [PaginaControllers::class, 'index']);
$router->post('/', [PaginaControllers::class, 'index']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();