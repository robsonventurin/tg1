<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    function cadastrarProduto(Request $req){
    	$nome = $req->input('name');
    	$descricao = $req->input('descricao');
    	$qtd = $req->input('qtd');
    	$slug = $req->input('slug');
    	$valor = $req->input('valor');

    	$produto = new Produto();
    	$produto->nome = $nome;
    	$produto->descricao = $descricao;
    	$produto->qtd = $qtd;
    	$produto->slug = $slug;
    	$produto->valor = $valor;

    	if ($produto->save()) {
            $msg = "Cadastro realizado com sucesso!";
         } else {
            $msg = "Cadastro não foi bem sucedido!";
         }

         return view('confirm', ['mensagem' => $msg ]);

    }

    function alterarProduto(Request $req, $id){
       $nome = $req->input('name');
    	$descricao = $req->input('descricao');
    	$qtd = $req->input('qtd');
    	$slug = $req->input('slug');
    	$valor = $req->input('valor');

    	$produto = Produto::find($id);
    	$produto->nome = $nome;
    	$produto->descricao = $descricao;
    	$produto->qtd = $qtd;
    	$produto->slug = $slug;
    	$produto->valor = $valor;

        if ($produto->save()) {
            $msg = "Cadastro atualizado com sucesso!";
         } else {
            $msg = "Atualização não foi bem sucedido!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }

    function deletarProduto($id){
            $produto = Produto::find($id);

        if ($produto->delete()) {
            $msg = "Produto deletado com sucesso!";
        }else {
            $msg = "Erro ao excluir Produto!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }
}