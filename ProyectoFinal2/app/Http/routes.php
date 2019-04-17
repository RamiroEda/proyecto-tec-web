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

Route::get('/', 'welcomeController@index');

/*-------------------------------------------Admin------------------------------------------------------------*/
Route::get('/inicio', 'adminController@index');
Route::get('/tabla', 'adminController@tablas');
Route::get('/catalogos/plantel', 'adminController@panel');
Route::get('/catalogos/semestre', 'adminController@tablaSemestre');
Route::get('/catalogos/nivel', 'adminController@tablaNivel');
Route::get('/catalogos/grupo', 'adminController@tablaGrupo');
Route::get('/catalogos/tipo_practica', 'adminController@tablaTipoPractica');
Route::get('/catalogos/entidad_federativa', 'adminController@tablaEntidadFederativa');
Route::get('/catalogos/unidad_aprendizaje', 'adminController@tablaUnidadAprendizaje');
Route::get('/catalogos/profesor', 'adminController@tablaProfesor');
Route::get('/nomina', 'adminController@nomina');
Route::get('/informes', 'adminController@informesAcademicos');
/*------------------------------------------Profesor----------------------------------------------------------*/

/*-------------------------------------------Alumno-----------------------------------------------------------*/
