<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FotoProduto;
use App\Produto;

class FotosProdutosController extends Controller
{
     function cadastrarFotoProduto(Request $req, $id){
      $current = Produto::find($id);
      $count = count($current->fotos);

      if ($count < 5) {

       $nome = $req->file('foto')->store('public');
    	   $foto = new FotoProduto();
       $foto->nome = $nome;
       $foto->produto_id = $id;

    	   if ($foto->save()) {
            $msg = "Cadastro realizado com sucesso!";
         } else {
            $msg = "Cadastro não foi bem sucedido!";
         }

         return redirect()->route('telaFotoProduto', ['id' => $id]);
      } else {
         return view('resultado', ['mensagem' => 'Máximo de 5 fotos ultrapassados.' ]);
      }

    }

    function deletarFotoProduto($id){
        $foto = FotoProduto::find($id);
        $pid = $foto->produto_id;

        if ($foto->delete()) {
            $msg = "Foto deletado com sucesso!";
        }else {
            $msg = "Erro ao excluir foto!";
         }

          return redirect()->route('telaFotoProduto', ['id' => $pid]);
    }


    function telaFotoProduto($id) {
       $produto = Produto::find($id);
       $fotos = $produto->fotos;

       return view("produtos.fotos", ['produto'=>$produto, 'fotos'=> $fotos]);
    }

   }
