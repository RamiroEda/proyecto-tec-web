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
