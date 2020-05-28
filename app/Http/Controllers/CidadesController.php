<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidade;


class CidadesController extends Controller
{
    function cadastrarCidade(Request $req){
    	$nome = $req->input('name');
    	$estado = $req->input('estado');

    	$cidade = new Cidade();
    	$cidade->nome = $nome;
    	$cidade->estado = $estado;

    	if ($cidade->save()) {
            $msg = "Cidade cadastrada com sucesso!";
         } else {
            $msg = "Cadastro de cidade não foi bem sucedido!";
         }

         return view('confirm', ['mensagem' => $msg ]);

}

    function alterarCidade(Request $req, $id){
        $nome = $req->input('name');
    	$estado = $req->input('estado');

    	$cidade = Cidade::find($id);
    	$cidade->nome = $nome;
    	$cidade->estado = $estado;

        if ($cidade->save()) {
            $msg = "Cidade atualizada com sucesso!";
         } else {
            $msg = "Atualização de cidade não foi bem sucedida!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }

    function deletarCidade($id){
            $cidade = Cidade::find($id);

        if ($cidade->delete()) {
            $msg = "Cidade deletada com sucesso!";
        }else {
            $msg = "Erro ao excluir cidade!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }
}
