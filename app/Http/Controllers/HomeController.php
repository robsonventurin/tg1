<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\VendasHasProdutos;
use App\Produtos;
use App\Venda;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produtos = Produto::all();

        $categorias = 0;

        $vendas = Venda::all();
        $total_categoria = [];
        foreach($vendas as $v) {
            foreach($v->produtos as $p) {
                if (!array_key_exists($p->id_categoria_produtos, $total_categoria)) 
                    $total_categoria[$p->id_categoria_produtos] = 1;
                else
                    $total_categoria[$p->id_categoria_produtos] = $total_categoria[$p->id_categoria_produtos] + 1;
            }
        }


        dd($total_categoria);

        dd('');

        return view('index', ['produtos' => $produtos]);
        //return view('home');
    }
}
