<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaProdutos;
use App\Produto;

class categoriaProdutosController extends Controller
{
    function cadastrarCategoriaProduto(Request $req){
    	$nome = $req->input('name');
        $categoria_pai = $req->input('categoria_pai');
        
        if ($categoria_pai == 0)
            $categoria_pai = null;

    	$categoriaProduto = new CategoriaProdutos();
    	$categoriaProduto->nome = $nome;
    	$categoriaProduto->categoria_pai = $categoria_pai;

    	if ($categoriaProduto->save()) {
            $msg = "Categoria de produto cadastrada com sucesso!";
         } else {
            $msg = "Categoria de produto não foi cadastrada!";
         }

         return view('resultado', ['mensagem' => $msg ]);

    }

    function alterarCategoriaProduto(Request $req, $id){
       	$nome = $req->input('name');
    	$categoria_pai = $req->input('categoria_pai');

        if ($categoria_pai == 0)
            $categoria_pai = null;

    	$categoriaProduto = CategoriaProdutos::find($id);
    	$categoriaProduto->nome = $nome;
    	$categoriaProduto->categoria_pai = $categoria_pai;

        if ($categoriaProduto->save()) {
            $msg = "Categoria de produto atualizado com sucesso!";
         } else {
            $msg = "Atualização de categoria de produto não foi bem sucedida!";
         }

         return view('resultado', ['mensagem' => $msg]);
    }

    function deletarCategoriaProduto($id){
            $categoriaProduto = CategoriaProdutos::find($id);

        if ($categoriaProduto->delete()) {
            $msg = "Categoria de produto deletada com sucesso!";
        }else {
            $msg = "Erro ao excluir categoria de produto!";
         }

         return view('resultado', ['mensagem' => $msg]);
    }

    function telaListarCategoriaProdutoTodos(){
        $produtos = Produto::all();
        return view('listar_categoria', ['produtos' => $produtos]);
    }

    function telaListarCategoriaProdutoAchar($id){
        $produtos = Produto::where('id_categoria_produtos', $id)->get();
        $categoria = CategoriaProdutos::find($id);
        return view('listar_categoria', ['categoria'=>$categoria, 'produtos' => $produtos]);
    }

    function telaListarCategoriaProduto(){
        $categorias = CategoriaProdutos::all();
        return view('categoria_produtos.listar', ['categorias' => $categorias]);
    }

    function telaCadastrarCategoriaProduto(){
        $pais = CategoriaProdutos::all();
        return view('categoria_produtos.adicionar', ['pais'=>$pais]);
    }

     function telaAlterarCategoriaProduto($id){
        $c = CategoriaProdutos::find($id);
        $pais = CategoriaProdutos::all();
        return view('categoria_produtos.alterar', ['c'=>$c, 'pais'=> $pais]);
    }
}
