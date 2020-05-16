<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/categoria/listar_todos', function () {
    return view('listar_categoria');
});

Route::get('/busca/resultado', function () {
    return view('listar_busca');
});

Route::get('/produto/1', function () {
    return view('produto');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
