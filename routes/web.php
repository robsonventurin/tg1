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

Route::get('/', function () { return view('index'); });


Route::get('/categoria/listar_todos', function () { return view('listar_categoria'); });

Route::get('/busca/resultado', function () { return view('listar_busca'); });

Route::get('/produto/1', function () { return view('produto'); });

Route::get('/carrinho', function () { return view('carrinho'); });


Route::get('/categoria_produtos/listar', function () { return view('categoria_produtos.listar'); });
Route::get('/categoria_produtos/adicionar', function () { return view('categoria_produtos.adicionar'); });
Route::get('/categoria_produtos/alterar/1', function () { return view('categoria_produtos.alterar'); });

Route::get('/produtos/listar', function () { return view('produtos.listar'); });
Route::get('/produtos/adicionar', function () { return view('produtos.adicionar'); });
Route::get('/produtos/alterar/1', function () { return view('produtos.alterar'); });

Route::get('/cidades/listar', function () { return view('cidades.listar'); });
Route::get('/cidades/adicionar', function () { return view('cidades.adicionar'); });
Route::get('/cidades/alterar/1', function () { return view('cidades.alterar'); });

Route::get('/vendas/listar', function () { return view('vendas.listar'); });
Route::get('/vendas/listar/itens/1', function () { return view('vendas.listar_itens'); });

Route::get('/enderecos/listar', function () { return view('enderecos.listar'); });
Route::get('/enderecos/adicionar', function () { return view('enderecos.adicionar'); });
Route::get('/enderecos/alterar/1', function () { return view('enderecos.alterar'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
