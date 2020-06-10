<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{
    function cadastrarUsuario(Request $req){
    	$nome = $req->input('name');
    	$email = $req->input('email');
    	$password = $req->input('password');
    	$cpf = $req->input('cpf');
    	$rg = $req->input('rg');
    	$data_nasc = $req->input('data_nasc');
    	$telefone = $req->input('telefone');

    	$usuario = new User();
    	$usuario->nome = $nome;
    	$usuario->email = $email;
    	$usuario->password = $password;
    	$usuario->cpf = $cpf;
    	$usuario->rg = $rg;
    	$usuario->data_nasc = $data_nasc;
    	$usuario->telefone = $telefone;

    	if ($usuario->save()) {
            $msg = "Cadastro realizado com sucesso!";
         } else {
            $msg = "Cadastro não foi bem sucedido!";
         }

         return view('confirm', ['mensagem' => $msg ]);

    }

    function alterarUsuario(Request $req, $id){
        $nome = $req->input('name');
    	$email = $req->input('email');
    	$cpf = $req->input('cpf');
    	$rg = $req->input('rg');
    	$data_nasc = $req->input('data_nasc');
    	$telefone = $req->input('telefone');

        $usuario = User::find($id);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->cpf = $cpf;
        $usuario->rg = $rg;
        $usuario->data_nasc = $data_nasc;
        $usuario->telefone = $telefone;

        if ($usuario->save()) {
            $msg = "Cadastro atualizado com sucesso!";
         } else {
            $msg = "Atualização não foi bem sucedido!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }

    function deletarUsuario($id){
            $usario = User::find($id);

        if ($usario->delete()) {
            $msg = "Usuário deletado com sucesso!";
        }else {
            $msg = "Erro ao excluir usuário!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }

    function logout(){
        Auth::logout();
        
        return redirect()->route('login');
    }
}
