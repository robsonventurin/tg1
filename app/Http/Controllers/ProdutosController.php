<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\CategoriaProdutos;

class ProdutosController extends Controller
{
    function cadastrarProduto(Request $req){
    	$nome = $req->input('name');
    	$descricao = $req->input('descricao');
    	$qtd = $req->input('qtd');
    	$valor = $req->input('valor');
    	$categoria = $req->input('categoria');

    	$produto = new Produto();
    	$produto->nome = $nome;
    	$produto->descricao = $descricao;
    	$produto->qtd = $qtd;
    	$produto->valor = $valor;
    	$produto->id_categoria_produtos = $categoria;

    	if ($produto->save()) {
            $msg = "Cadastro realizado com sucesso!";
         } else {
            $msg = "Cadastro não foi bem sucedido!";
         }

        return redirect()->route('telaFotoProduto', ['id' => $produto->id]);

    }

    function alterarProduto(Request $req, $id){
    	$nome = $req->input('name');
    	$descricao = $req->input('descricao');
    	$qtd = $req->input('qtd');
    	$valor = $req->input('valor');
    	$categoria = $req->input('categoria');

    	$produto = Produto::find($id);
    	$produto->nome = $nome;
    	$produto->descricao = $descricao;
    	$produto->qtd = $qtd;
    	$produto->valor = $valor;
    	$produto->id_categoria_produtos = $categoria;

        if ($produto->save()) {
            $msg = "Cadastro atualizado com sucesso!";
         } else {
            $msg = "Atualização não foi bem sucedido!";
         }

         return view('resultado', ['mensagem' => $msg]);
    }

    function deletarProduto($id){
            $produto = Produto::find($id);

        if ($produto->delete()) {
            $msg = "Produto deletado com sucesso!";
        }else {
            $msg = "Erro ao excluir Produto!";
         }

         return view('resultado', ['mensagem' => $msg]);
    }

    function telaListarProdutoSingle($id, $nome){
        $produto = Produto::find($id);
        return view('produtos.produto', ['produto' => $produto]);
    }

    function telaListarProduto(){
        $produtos = Produto::all();
        return view('produtos.listar', ['produtos' => $produtos]);
    }

    function telaListarProdutoFind($termo){
        $produtos = Produto::all();
        return view('listar_busca', ['termo' => $termo, 'produtos' => $produtos]);
    }

    function telaCadastrarProduto(){
        $categorias = CategoriaProdutos::all();
        return view('produtos.adicionar', ['categorias' => $categorias]);
    }

     function telaAlterarProduto($id){
        $p = Produto::find($id);
        $categorias = CategoriaProdutos::all();
        return view('produtos.alterar', ['p' => $p, 'categorias' => $categorias]);
    }
}