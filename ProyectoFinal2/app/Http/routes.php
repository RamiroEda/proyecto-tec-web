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

Route::get('/', function() {
    return view('auth.login');
});

Route::get('/inicio', function() {
    return view('Admin.menu');
});

Route::get('/tabla', function() {
    return view('Admin.tablas');
});

Route::get('/catalogos/plantel', function(){
    return view('Admin.catalogos.plantel');
});

Route::get('/catalogos/semestre', function(){
    return view('Admin.catalogos.Semestre');
});

Route::get('/catalogos/nivel', function(){
    return view('Admin.catalogos.nivel');
});

Route::get('/catalogos/grupo', function(){
    return view('Admin.catalogos.grupo');
});

Route::get('/catalogos/tipo_practica', function(){
    return view('Admin.catalogos.tipo_practica');
});

Route::get('/catalogos/entidad_federativa', function(){
    return view('Admin.catalogos.entidad_federativa');
});

Route::get('/catalogos/unidad_aprendizaje', function(){
    return view('Admin.catalogos.unidad_aprendizaje');
});

Route::get('/catalogos/profesor', function(){
    return view('Admin.catalogos.profesor');
});

Route::get('/nomina', function() {
    return view('Admin.Nomina');
});
Route::get('/informes', function() {
    return view('Admin.InformesAcademicos');
});
