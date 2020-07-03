<?php

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

Route::get('/', function () {
    return view('views.welcome');
});
/*Empleados*/
$router->get('/empleado', 'EmpleadoController@index');
$router->get('/getEmpleados/{id}', 'EmpleadoController@getEmpleados');
$router->post('/crearEmpleados', 'EmpleadoController@createEmpleado');
$router->get('/crearEmpleados', 'EmpleadoController@createEmpleadoindex');
$router->post('/actualizarEmpleados/{id}', 'EmpleadoController@updateEmpleado');
$router->get('/actualizarEmpleados/{id}', 'EmpleadoController@updateEmpleadoindex');
$router->post('/eliminarEmpleados/{id}', 'EmpleadoController@destroyEmpleado');
$router->get('/eliminarEmpleados/{id}', 'EmpleadoController@destroyEmpleadoindex');

/*Empleos*/
$router->get('/empleos', 'EmpleoController@index');
$router->get('/getEmpleos/{id_empleo}', 'EmpleoController@getEmpleos');
$router->post('/crearEmpleos', 'EmpleoController@createEmpleo');
$router->get('/crearEmpleos', 'EmpleoController@createEmpleoindex');
$router->post('/actualizarEmpleos/{id_empleo}', 'EmpleoController@updateEmpleo');
$router->get('/actualizarEmpleos/{id_empleo}', 'EmpleoController@updateEmpleoindex');
$router->post('/eliminarEmpleos/{id_empleo}', 'EmpleoController@destroyEmpleo');
$router->get('/eliminarEmpleos/{id_empleo}', 'EmpleoController@destroyEmpleoindex');

//https://console.clever-cloud.com/users/me/addons/addon_c66f0725-2c29-4946-a168-fbfefef8c960