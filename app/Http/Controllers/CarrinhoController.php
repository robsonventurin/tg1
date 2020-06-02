<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Produto;
use App\Venda;
use App\Enderecos;
use App\User;


class CarrinhoController extends Controller
{
    function telaListar(){
        $produtos = Session::get('carrinho');
        $enderecos = Auth::user()->enderecos;

    
        if ($produtos != null) {
            foreach($produtos as $key => $p) {
                $produtos[$key]['info'] = Produto::find($p['id']);
            }
        }

        if ($produtos == null)
            $produtos = array();

        return view('carrinho', ['produtos' => $produtos, 'enderecos' => $enderecos]);
    }

    function adicionar($id) {
        $data = Session::get('carrinho');
        $pass = false;

        if ($data == null) {
            $data[] = array(
                'id' => $id,
                'qtd' => 1,
            );
        } else {
            foreach($data as $key => $p) {
                if ($data[$key]['id'] == $id) {
                    $data[$key]['qtd'] = $data[$key]['qtd'] + 1;
                    $pass = true;
                }
            }

            if (!$pass) {
                $data[] = array(
                    'id' => $id,
                    'qtd' => 1,
                );
            }
        }


        Session::put('carrinho', $data);
        Session::save();
        return redirect()->back()->with('mensagem', 'Produto adicionado no carrinho!');   
    }

    function diminuir($id) {
        $data = Session::get('carrinho');

        if ($data != null) {
            foreach($data as $key => $p) {
                if ($data[$key]['id'] == $id) {
                    $data[$key]['qtd'] = $data[$key]['qtd'] - 1;

                    if ($data[$key]['qtd'] == 0) {
                        unset($data[$key]);
                    }
                }
            }
        }


        Session::put('carrinho', $data);
        Session::save();
        return redirect()->back()->with('mensagem', 'Produto diminuido no carrinho!');   

    }

    function excluir($id) {
        $data = Session::get('carrinho');

        if ($data != null) {
            foreach($data as $key => $p) {
                if ($data[$key]['id'] == $id) {
                    unset($data[$key]);
                }
            }
        }

        Session::put('carrinho', $data);
        Session::save();
        return redirect()->back()->with('mensagem', 'Produto excluído no carrinho!');   
    }

    function finalizar(Request $req) {
        $data = Session::get('carrinho');
        $valor_total = 0;
        $itens = array();

        if ($data == null || count($data) <= 0) {
            return view('resultado', [ "mensagem" => 'Você não pode finalizar uma compra sem itens!']);
        }
        foreach($data as $key => $c) {
            $p = Produto::find($c['id']);
            $valor_total = $valor_total + ($p->valor * $c['qtd']);
        }

        $venda = new Venda();
        $venda->data =  date ("Y-m-d H:i:s");
        $venda->valor_total = $valor_total;
        $venda->id_users = Auth::user()->id;
        $venda->id_enderecos = $req->input('endereco_entrega');
        $venda->save();
            
        foreach($data as $key => $c) {
            $p = Produto::find($c['id']);
            $venda->produtos()->attach($p->id, ['quantidade'=>$c['qtd'], 'subtotal'=>($p->valor * $c['qtd'])]);
        }

        Session::forget('carrinho');
        Session::save();

        return view('resultado', [ "mensagem" => 'Você acabou de finalizar a sua compra!']);

       // $venda::save();
        /*if ($data != null) {
            foreach($data as $key => $p) {
                if ($data[$key]['id'] == $id) {
                    unset($data[$key]);
                }
            }
        }

        Session::put('carrinho', $data);
        Session::save();
        return back();*/
    }
}
