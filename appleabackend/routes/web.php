<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/tipos_empleados',[
    'uses' => 'TipoEmpleadoController@index'
]);

$router->get('/unidades_medida',[
    'uses' => 'UnidadesMedidaController@index'
]);

$router->post('/actividad',[
    'uses' => 'ActividadController@store'
]);

$router->post('/empleado',[
    'uses' => 'EmpleadoController@store'
]);

$router->post('/empleado_actividad',[
    'uses' => 'ActividadEmpleadoController@store'
]);

