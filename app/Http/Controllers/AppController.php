<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Produto;
use App\VendasHasProdutos;

class AppController extends Controller
{
    function dashboard(){
    	$vendas_quantidade = Venda::selectRaw('DAY(created_at) as dia, COUNT(id) as nVendas')->groupByRaw('DAY(created_at)')->orderByRaw('1 ASC')->get();

    	
    	$vendas_produto = VendasHasProdutos::selectRaw('SUM(quantidade) as quantidade, id_produto, produtos.nome as nome')->LeftJoin('produtos', 'produtos.id', '=', 'id_produto')->groupByRaw('id_produto')->get();
    	
		//dd($vendas_produto);
    	return view('dashboard', ['vendas_quantidade' => $vendas_quantidade, 'vendas_produto' => $vendas_produto]);

    }
}
