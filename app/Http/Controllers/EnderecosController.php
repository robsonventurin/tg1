<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enderecos;
use App\Cidade;

class EnderecosController extends Controller
{
    function cadastrarEndereco(Request $req){
    	$descricao = $req->input('descricao');
    	$logradouro = $req->input('logradouro');
    	$numero = $req->input('numero');
    	$bairro = $req->input('bairro');
    	$id_cidades = $req->input('id_cidades');
    	$id_users = $req->input('id_users');

    	$endereco = new Enderecos();
    	$endereco->descricao = $descricao;
    	$endereco->logradouro = $logradouro;
    	$endereco->numero = $numero;
    	$endereco->bairro = $bairro;
    	$endereco->id_cidades = $id_cidades;
    	$endereco->id_users = $id_users;

    	if ($endereco->save()) {
            $msg = "Endereço cadastrado com sucesso!";
         } else {
            $msg = "Cadastro de endereço não foi bem sucedido!";
         }

         return view('resultado', ['mensagem' => $msg ]);

}

    function alterarEndereco(Request $req, $id){
        $descricao = $req->input('descricao');
    	$logradouro = $req->input('logradouro');
    	$numero = $req->input('numero');
    	$bairro = $req->input('bairro');
    	$id_cidades = $req->input('id_cidades');

    	$endereco = Enderecos::find($id);
    	$endereco->descricao = $descricao;
    	$endereco->logradouro = $logradouro;
    	$endereco->numero = $numero;
    	$endereco->bairro = $bairro;
    	$endereco->id_cidades = $id_cidades;

        if ($endereco->save()) {
            $msg = "Endereço atualizado com sucesso!";
         } else {
            $msg = "Atualização de endereço não foi bem sucedido!";
         }

         return view('resultado', ['mensagem' => $msg]);
    }

    function deletarEndereco($id){
        $endereco = Enderecos::find($id);

        if ($endereco->delete()) {
            $msg = "Endereço deletado com sucesso!";
        }else {
            $msg = "Erro ao excluir endereço!";
         }

         return view('resultado', ['mensagem' => $msg]);
    }

    function telaListarEndereco() {
        $lista = Enderecos::all();
        return view ("enderecos.listar", ['enderecos'=>$lista]);
    }

    function telaCadastrarEndereco() {
        $cidades = Cidade::all();
        return view ("enderecos.adicionar", ['cidades'=>$cidades]);
    }

    function telaAlterarEndereco($id) {
        $e = Enderecos::find($id);
        $cidades = Cidade::all();
        return view ("enderecos.alterar", ['e'=>$e, 'cidades'=>$cidades]);
    }
}
