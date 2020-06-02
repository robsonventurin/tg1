<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendasHasProdutosController extends Controller
{
    function telaListar() {        
        $lista = Venda::all();
        //return view('tipos_produtos.listar', [ "vendas" => $lista]);
    }
}
