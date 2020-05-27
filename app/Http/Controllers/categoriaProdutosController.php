<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaProdutos;

class categoriaProdutosController extends Controller
{
    function cadastrarCategoriaProduto(Request $req){
    	$nome = $req->input('name');
    	$descricao = $req->input('categoria_pai');

    	$categoriaProduto = new CategoriaProdutos();
    	$categoriaProduto->nome = $nome;
    	$categoriaProduto->categoria_pai = $categoria_pai;

    	if ($categoriaProduto->save()) {
            $msg = "Categoria de produto cadastrada com sucesso!";
         } else {
            $msg = "Categoria de produto não foi cadastrada!";
         }

         return view('confirm', ['mensagem' => $msg ]);

    }

    function alterarCategoriaProduto(Request $req, $id){
       	$nome = $req->input('name');
    	$descricao = $req->input('categoria_pai');

    	$categoriaProduto = CategoriaProdutos::find($id);
    	$categoriaProduto->nome = $nome;
    	$categoriaProduto->categoria_pai = $categoria_pai;

        if ($categoriaProduto->save()) {
            $msg = "Categoria de produto atualizado com sucesso!";
         } else {
            $msg = "Atualização de categoria de produto não foi bem sucedida!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }

    function deletarCategoriaProduto($id){
            $categoriaProduto = CategoriaProdutos::find($id);

        if ($categoriaProduto->delete()) {
            $msg = "Categoria de produto deletada com sucesso!";
        }else {
            $msg = "Erro ao excluir categoria de produto!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }
}
