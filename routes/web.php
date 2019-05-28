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
    return view('welcome');
});

Route::get('teste', function() {
    return 'Olá Marilene !!';
});

Route::get('primeiraView', 'testeController@primeiraView');
Route::get('testeController/segundaView', 'testeController@segundaView');

//CRUD - Controller Produto
Route::get('/teste', 'testeController@index');
Route::get('/teste/create', 'testeController@create');
Route::post('/teste', 'testeController@store');
Route::get('/teste/{id}', 'testeController@show');
Route::get('/teste/{id}/edit', 'testeController@edit');
Route::put('/teste/{id}', 'testeController@update');
Route::delete('/teste/{id}', 'testeController@destroy');
Route::get('/teste/remove/{id}', 'testeController@remove');

Route::resource('products', 'ProductsController');