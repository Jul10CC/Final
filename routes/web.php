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

Route::get('https://warm-escarpment-05440.herokuapp.com/', function () {
    return view('views.welcome');
});
/*Empleados*/
$router->get('https://warm-escarpment-05440.herokuapp.com/empleado', 'EmpleadoController@index');
$router->get('https://warm-escarpment-05440.herokuapp.com/getEmpleados/{id}', 'EmpleadoController@getEmpleados');
$router->post('https://warm-escarpment-05440.herokuapp.com/crearEmpleados', 'EmpleadoController@createEmpleado');
$router->get('https://warm-escarpment-05440.herokuapp.com/crearEmpleados', 'EmpleadoController@createEmpleadoindex');
$router->post('https://warm-escarpment-05440.herokuapp.com/actualizarEmpleados/{id}', 'EmpleadoController@updateEmpleado');
$router->get('https://warm-escarpment-05440.herokuapp.com/actualizarEmpleados/{id}', 'EmpleadoController@updateEmpleadoindex');
$router->post('https://warm-escarpment-05440.herokuapp.com/eliminarEmpleados/{id}', 'EmpleadoController@destroyEmpleado');
$router->get('https://warm-escarpment-05440.herokuapp.com/eliminarEmpleados/{id}', 'EmpleadoController@destroyEmpleadoindex');

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