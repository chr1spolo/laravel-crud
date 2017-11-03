<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [ 'title' => 'Logueate', 'action' => 'initLogin' ]);
});

Route::get('/register', function () {
    return view('welcome', [ 'title' => 'Registrate', 'action' => 'initRegister' ]);
});

Route::namespace('Log')->group(function () {

    Route::post('post/initLogin', 'Login@Start');

    Route::post('post/initRegister', 'Login@Register');
});
