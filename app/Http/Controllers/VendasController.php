<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Venda;
use App\Produto;

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

    function telaListarVendas(){
        if (Auth::user()->ehAdmin())
            $vendas = Venda::all();
        else
            $vendas = Auth::user()->vendas;

        return view('vendas.listar', ['vendas'=>$vendas]);
    }


    function telaMinhasCompras(){
        if (Auth::user()->ehAdmin())
            $vendas = Venda::all();
        else
            $vendas = Auth::user()->vendas;

        return view('vendas.minhas_compras', ['vendas' => $vendas]);
    }

    function telaMinhasComprasId($id){
        $venda = Venda::find($id);
        $produtos = $venda->produtos;
    

        if ($produtos != null) {
            foreach($produtos as $key => $p) {
                $produtos[$key]['info'] = Produto::find($p['id']);
            }
        }
        return view('vendas.minhas_compras_id', ['produtos'=> $produtos, 'venda' => $venda]);
    }

    function telaListarItensVenda($id) {
        $venda = Venda::find($id);

        return view('vendas.listar_itens', ['venda' => $venda]);
    }

    function statusEntrega(Request $req, $id_pedido) {
        //recebe do caçalog
        $pedido = Vendas::find($id_pedido);
        $pedido->status_entrega = $req['statusEntrega'];
        $pedido->save();
    }
}
