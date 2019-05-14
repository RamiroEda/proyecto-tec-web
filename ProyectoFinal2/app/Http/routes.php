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

/*--------------------------------------------Auth-------------------------------------------------------------*/
Route::get('/', 'welcomeController@index');
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

/*-------------------------------------------Admin------------------------------------------------------------*/
Route::get('/inicio', 'adminController@index');
Route::get('/tabla', 'adminController@tablas');
Route::get('/home', 'adminController@home');

Route::get('/catalogos/plantel', 'adminController@panel');
Route::post('/catalogos/plantel', 'adminController@nuevoPlantel');
Route::patch('/catalogos/plantel', 'adminController@patchPlantel');
Route::delete('/catalogos/plantel', 'adminController@deletePlantel');

/*_________________________________________________________________*/
Route::get('/catalogos/semestre', 'adminController@tablaSemestre');
Route::post('/catalogos/semestre', 'adminController@nuevoSemestre');
Route::patch('/catalogos/semestre', 'adminController@patchSemestre');
Route::delete('catalogos/semestre', 'adminController@deleteSemestre');
/*_________________________________________________________________*/

Route::get('/catalogos/nivel', 'adminController@tablaNivel');
Route::post('/catalogos/nivel', 'adminController@nuevoNivel');
Route::patch('/catalogos/nivel', 'adminController@patchNivel');
Route::delete('/catalogos/nivel', 'adminController@deleteNivel');

Route::get('/catalogos/grupo', 'adminController@tablaGrupo');
Route::post('/catalogos/grupo', 'adminController@nuevoGrupo');
Route::patch('/catalogos/grupo', 'adminController@patchGrupo');
Route::delete('/catalogos/grupo', 'adminController@deleteGrupo');

Route::get('/catalogos/tipo_practica', 'adminController@tablaTipoPractica');

/*_______________________________________________________________________________________*/
Route::get('/catalogos/entidad_federativa', 'adminController@tablaEntidadFederativa');
/*_______________________________________________________________________________________*/

Route::get('/catalogos/unidad_aprendizaje', 'adminController@tablaUnidadAprendizaje');

/*____________________________________________________________________*/
Route::get('/catalogos/profesor', 'adminController@tablaProfesor');
/*____________________________________________________________________*/
Route::get('/nomina', 'adminController@nomina');
Route::get('/informes', 'adminController@informesAcademicos');
Route::get('/configuracion', 'adminController@configuracion');
/*------------------------------------------Profesor----------------------------------------------------------*/

/*-------------------------------------------Alumno-----------------------------------------------------------*/
