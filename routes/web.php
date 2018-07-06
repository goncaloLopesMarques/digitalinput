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
    return view('pages.home');
});

<<<<<<< HEAD
route::get('/orcamento', 'OrcamentoController@index');
=======
Route::get('/teste', function () {
    return view('index');
});


>>>>>>> master

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
