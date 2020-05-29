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

Route::get('/categoria_produtos/listar', 'categoriaProdutosController@telaListarCategoriaProduto')->name('telaListarCategoriaProduto');
Route::get('/categoria_produtos/cadastrar', 'categoriaProdutosController@telaCadastrarCategoriaProduto')->name('telaCadastrarCategoriaProduto');
Route::post('/categoria_produtos/cadastrar/novo', 'categoriaProdutosController@cadastrarCategoriaProduto')->name('cadastrarCategoriaProduto');
Route::get('/categoria_produtos/alterar/{id}', 'categoriaProdutosController@telaAlterarCategoriaProduto')->name('telaAlterarCategoriaProduto');
Route::post('/categoria_produtos/alterar/{id}', 'categoriaProdutosController@alterarCategoriaProduto')->name('alterarCategoriaProduto');


Route::get('/produtos/listar', 'ProdutosController@telaListarProduto')->name('telaListarProduto');
Route::get('/produtos/cadastrar', 'ProdutosController@telaCadastrarProduto')->name('telaCadastrarProduto');
Route::post('/produtos/cadastrar/novo', 'ProdutosController@cadastrarProduto')->name('cadastrarProduto');
Route::get('/produtos/alterar/{id}', 'ProdutosController@telaAlterarProduto')->name('telaAlterarProduto');
Route::post('/produtos/alterar/{id}', 'ProdutosController@alterarProduto')->name('alterarProduto');

Route::get('/cidades/listar', 'CidadesController@telaListarCidade')->name('telaListarCidade');
Route::get('/cidades/cadastrar', 'CidadesController@telaCadastrarCidade')->name('telaCadastrarCidade');
Route::post('/cidades/cadastrar/novo', 'CidadesController@cadastrarCidade')->name('cadastrarCidade');
Route::get('/cidades/alterar/{id}', 'CidadesController@telaAlterarCidade')->name('telaAlterarCidade');
Route::post('/cidades/alterar/{id}', 'CidadesController@alterarCidade')->name('alterarCidade');

Route::get('/vendas/listar', 'VendasController@telaListarVendas')->name('telaListarVenda');
Route::get('/vendas/{id}/listar/itens', 'VendasController@telaListarItensVenda')->name('telaListarItensVenda');

Route::get('/enderecos/listar', 'EnderecosController@telaListarEndereco')->name('telaListarEndereco');
Route::get('/enderecos/cadastrar', 'EnderecosController@telaCadastrarEndereco')->name('telaCadastrarEndereco');
Route::post('/enderecos/cadastrar/novo', 'EnderecosController@cadastrarEndereco')->name('cadastrarEndereco');
Route::get('/enderecos/alterar/{id}', 'EnderecosController@telaAlterarEndereco')->name('telaAlterarEndereco');
Route::post('/enderecos/alterar/{id}', 'EnderecosController@alterarEndereco')->name('alterarEndereco');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
