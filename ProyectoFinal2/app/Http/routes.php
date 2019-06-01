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
Route::get('/home', 'adminController@home');

Route::get('/practicas', 'adminController@practicas');
Route::post('/practicas', 'adminController@nuevaPractica');
Route::patch('/practicas', 'adminController@patchPractica');
Route::delete('/practicas', 'adminController@deletePractica');

Route::get('/catalogos/plantel', 'adminController@plantel');
Route::post('/catalogos/plantel', 'adminController@nuevoPlantel');
Route::patch('/catalogos/plantel', 'adminController@patchPlantel');
Route::delete('/catalogos/plantel', 'adminController@deletePlantel');

Route::get('/catalogos/semestre', 'adminController@tablaSemestre');
Route::post('/catalogos/semestre', 'adminController@nuevoSemestre');
Route::patch('/catalogos/semestre', 'adminController@patchSemestre');
Route::delete('catalogos/semestre', 'adminController@deleteSemestre');

Route::get('/catalogos/nivel', 'adminController@tablaNivel');
Route::post('/catalogos/nivel', 'adminController@nuevoNivel');
Route::patch('/catalogos/nivel', 'adminController@patchNivel');
Route::delete('/catalogos/nivel', 'adminController@deleteNivel');

Route::get('/catalogos/grupo', 'adminController@tablaGrupo');
Route::post('/catalogos/grupo', 'adminController@nuevoGrupo');
Route::patch('/catalogos/grupo', 'adminController@patchGrupo');
Route::delete('/catalogos/grupo', 'adminController@deleteGrupo');

Route::get('/catalogos/tipo_practica', 'adminController@tablaTipoPractica');
Route::post('/catalogos/tipo_practica', 'adminController@nuevoTipoPractica');
Route::patch('/catalogos/tipo_practica', 'adminController@patchTipoPractica');
Route::delete('/catalogos/tipo_practica', 'adminController@deleteTipoPractica');

Route::get('/catalogos/entidad_federativa', 'adminController@tablaEntidadFederativa');
Route::post('/catalogos/entidad_federativa', 'adminController@nuevaEntidadFederativa');
Route::patch('/catalogos/entidad_federativa', 'adminController@patchEntidadFederativa');
Route::delete('/catalogos/entidad_federativa', 'adminController@deleteEntidadFederatva');

Route::get('/catalogos/unidad_aprendizaje', 'adminController@tablaUnidadAprendizaje');
Route::post('/catalogos/unidad_aprendizaje', 'adminController@nuevaUnidadAprendizaje');
Route::patch('/catalogos/unidad_aprendizaje', 'adminController@patchUnidadAprendizaje');
Route::delete('/catalogos/unidad_aprendizaje', 'adminController@deleteUnidadAprendizaje');


Route::get('/catalogos/profesor', 'adminController@tablaProfesor');
Route::post('/catalogos/profesor', 'adminController@newProfesor');
Route::patch('/catalogos/profesor', 'adminController@patchProfesor');
Route::delete('/catalogos/profesor', 'adminController@delProfesor');

Route::get('/nomina', 'adminController@nomina');
Route::get('/informes', 'adminController@informesAcademicos');

Route::get('/configuracion', 'adminController@configuracion');
Route::post('/configuracion/UPIIZ', 'adminController@configuracionUPIIZ');
Route::post('configuracion/DES', 'adminController@configuracionDES');
/*------------------------------------------Profesor----------------------------------------------------------*/

/*-------------------------------------------Alumno-----------------------------------------------------------*/
