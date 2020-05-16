@extends('layouts.default')

@section('title')
    <a href="#" style="color:#000; font-size:0.7em; text-decoration:none;">Continuar Comprando</a>
@endsection

@section('subtitle', 'Carrinho De Compras')
            
@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Produto</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Ações</th>
        <th scope="col">Valor Unitário</th>
        <th scope="col">Valor Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Celular</td>
        <td class="qtd">
          <a href="#">-</a>
          <span>2</span>
          <a href="#">+</a>
        </td>
        <td><a href="#">Excluir</a></td>
        <td>R$ 350,00</td>
        <td>R$ 700,00</td>
      </tr>
      <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col" style="text-align:right;">Totalizando:</th>
        <th scope="col">R$ 700,00</th>
      </tr>
    </tbody>
  </table>

  <a href="#" class="btn btn-black py-3 px-5 btn-block">Finalizar Compra</a>
  <a href="#" class="btn btn-secondary py-3 px-5 btn-block mt-2">Continuar Comprando</a>


@endsection