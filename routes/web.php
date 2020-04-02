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
    return view('index');
});

Route::get('/produtos','ControladorProduto@index');
Route::get('/produtos/novo','ControladorProduto@create');
Route::post('/produtos','ControladorProduto@store');
Route::get('/produtos/editar/{id}','ControladorProduto@edit');
Route::put('/produtos/{id}','ControladorProduto@update');
Route::delete('/produtos/deletar/{id}','ControladorProduto@destroy');

Route::get('/categorias','ControladorCategoria@index');
Route::get('/categorias/novo','ControladorCategoria@create');
Route::post('/categorias','ControladorCategoria@store');
Route::get('/categorias/editar/{id}','ControladorCategoria@edit');
Route::put('/categorias/{id}','ControladorCategoria@update');
Route::delete('/categorias/deletar/{id}','ControladorCategoria@destroy');


