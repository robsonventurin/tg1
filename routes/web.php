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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'HomeController@index')->name('index');

Route::middleware(['auth'])->group(function(){


	Route::middleware(['eh_admin'])->group(function(){


		Route::get('/dashboard', 'AppController@dashboard')->name('telaDashboard');

		Route::get('/categoria_produtos/cadastrar', 'categoriaProdutosController@telaCadastrarCategoriaProduto')->name('telaCadastrarCategoriaProduto');
		Route::post('/categoria_produtos/cadastrar/novo', 'categoriaProdutosController@cadastrarCategoriaProduto')->name('cadastrarCategoriaProduto');
		Route::get('/categoria_produtos/alterar/{id}', 'categoriaProdutosController@telaAlterarCategoriaProduto')->name('telaAlterarCategoriaProduto');
		Route::post('/categoria_produtos/alterar/{id}', 'categoriaProdutosController@alterarCategoriaProduto')->name('alterarCategoriaProduto');
		Route::get('/categoria_produtos/excluir/{id}', 'categoriaProdutosController@deletarCategoriaProduto')->name('excluirCategoriaProduto'); 

		Route::get('/produtos/cadastrar', 'ProdutosController@telaCadastrarProduto')->name('telaCadastrarProduto');
		Route::post('/produtos/cadastrar/novo', 'ProdutosController@cadastrarProduto')->name('cadastrarProduto');
		Route::get('/produtos/alterar/{id}', 'ProdutosController@telaAlterarProduto')->name('telaAlterarProduto');
		Route::post('/produtos/alterar/{id}', 'ProdutosController@alterarProduto')->name('alterarProduto');
		Route::GET('/produtos/excluir/{id}', 'ProdutosController@deletarProduto')->name('excluirProduto'); 
		
		Route::GET('/produtos/fotos/{id}', 'FotosProdutosController@telaFotoProduto')->name('telaFotoProduto'); 
		Route::post('/produtos/fotos/adicionar/{id}', 'FotosProdutosController@cadastrarFotoProduto')->name('cadastrarFotoProduto'); 
		Route::get('/produtos/fotos/excluir/{id}', 'FotosProdutosController@deletarFotoProduto')->name('excluirFotoProduto'); 

		Route::get('/cidades/listar', 'CidadesController@telaListarCidade')->name('telaListarCidade');
		Route::get('/cidades/cadastrar', 'CidadesController@telaCadastrarCidade')->name('telaCadastrarCidade');
		Route::post('/cidades/cadastrar/novo', 'CidadesController@cadastrarCidade')->name('cadastrarCidade');
		Route::get('/cidades/alterar/{id}', 'CidadesController@telaAlterarCidade')->name('telaAlterarCidade');
		Route::post('/cidades/alterar/{id}', 'CidadesController@alterarCidade')->name('alterarCidade');
		Route::get('/cidades/excluir/{id}', 'CidadesController@deletarCidade')->name('excluirCidade');

	});


		
		Route::get('/categoria/listar_todos', function () { return view('listar_categoria'); });
		Route::get('/categoria/listar_todos', 'categoriaProdutosController@telaListarCategoriaProdutoTodos')->name('telaListarCategoriaProduto1');
		Route::get('/categoria/listar/{id}', 'categoriaProdutosController@telaListarCategoriaProdutoAchar')->name('telaListarCategoriaProdutoAchar');
		Route::get('/categoria_produtos/listar', 'categoriaProdutosController@telaListarCategoriaProduto')->name('telaListarCategoriaProduto');

		Route::get('/produto/{id}/{nome}', 'ProdutosController@telaListarProdutoSingle')->name('mostra_produto');
		Route::get('/produtos/buscar/{termo}', 'ProdutosController@telaListarProdutoFind')->name('telaListarProdutoBuscar');
		Route::get('/produtos/listar', 'ProdutosController@telaListarProduto')->name('telaListarProduto');
		
		Route::get('/busca/resultado', function () { return view('listar_busca'); });

		Route::get('/carrinho', 'CarrinhoController@telaListar')->name('carrinho');
		Route::get('/carrinho/adicionar/{id}', 'CarrinhoController@adicionar')->name('carrinho_adicionar');
		Route::get('/carrinho/diminuir/{id}', 'CarrinhoController@diminuir')->name('carrinho_diminuir');
		Route::get('/carrinho/excluir/{id}', 'CarrinhoController@excluir')->name('carrinho_excluir');
		Route::get('/carrinho/finalizar', 'CarrinhoController@finalizar')->name('carrinho_finalizar');

		Route::get('/vendas/listar', 'VendasController@telaListarVendas')->name('telaListarVenda');
		Route::get('/vendas/minhas_compras', 'VendasController@telaMinhasCompras')->name('telaListarMinhasCompras');
		Route::get('/vendas/minhas_compras/{id}', 'VendasController@telaMinhasComprasId')->name('detalha_minhas_compras');
		Route::get('/vendas/{id}/listar/itens', 'VendasController@telaListarItensVenda')->name('telaListarItensVenda');

		Route::get('/enderecos/listar', 'EnderecosController@telaListarEndereco')->name('telaListarEndereco');
		Route::get('/enderecos/cadastrar', 'EnderecosController@telaCadastrarEndereco')->name('telaCadastrarEndereco');
		Route::post('/enderecos/cadastrar/novo', 'EnderecosController@cadastrarEndereco')->name('cadastrarEndereco');
		Route::get('/enderecos/alterar/{id}', 'EnderecosController@telaAlterarEndereco')->name('telaAlterarEndereco');
		Route::post('/enderecos/alterar/{id}', 'EnderecosController@alterarEndereco')->name('alterarEndereco');
		Route::get('/enderecos/excluir/{id}', 'EnderecosController@deletarEndereco')->name('excluirEndereco'); 


});







Auth::routes();
Route::get('/logout', 'UsersController@logout')->name('logout'); 


