<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/Home','negocioController@create');
/*Route::controller('registrar_negocio');*/

/*Route::get('/', function () {
    //return view('welcome');
    return view('formularios.registro_negocio');
});*/

/*Route::get('/test', function() {
    //return "Aqui no hay nada bueno";
    return view('formularios.registro_negocio');
});*/