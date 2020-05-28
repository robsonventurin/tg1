<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FotoProduto;

class FotosProdutosController extends Controller
{
     function cadastrarFotoProduto(Request $req){
    	$nome = $req->input('name');

    	$foto = new FotoProduto();
    	$foto->nome = $nome;

    	if ($foto->save()) {
            $msg = "Cadastro realizado com sucesso!";
         } else {
            $msg = "Cadastro não foi bem sucedido!";
         }

         return view('confirm', ['mensagem' => $msg ]);

    }

    function alterarFotoProduto(Request $req, $id){
        $nome = $req->input('name');

        $foto = FotoProduto::find($id);
        $foto->nome = $nome;

        if ($foto->save()) {
            $msg = "Foto atualizado com sucesso!";
         } else {
            $msg = "Atualização não foi bem sucedida!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }

    function deletarFotoProduto($id){
        $foto = FotoProduto::find($id);

        if ($foto->delete()) {
            $msg = "Foto deletado com sucesso!";
        }else {
            $msg = "Erro ao excluir foto!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }}
