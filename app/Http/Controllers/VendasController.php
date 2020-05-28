<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;

class VendasController extends Controller
{
    function cadastrarVenda(Request $req){
    	$data = $req->input('data');
    	$valor_total = $req->input('valor_total');

    	$venda = new Venda();
    	$venda->data = $data;
    	$venda->valor_total = $valor_total;

    	if ($venda->save()) {
            $msg = "Venda cadastrada com sucesso!";
         } else {
            $msg = "Cadastro de Venda não foi bem sucedido!";
         }

         return view('confirm', ['mensagem' => $msg ]);

}

    function deletarVenda($id){
            $venda = Venda::find($id);

        if ($venda->delete()) {
            $msg = "Venda deletada com sucesso!";
        }else {
            $msg = "Erro ao excluir venda!";
         }

         return view('confirm', ['mensagem' => $msg]);
    }
}
