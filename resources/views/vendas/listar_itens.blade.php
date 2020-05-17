@extends('layouts.default')

@section('title', 'Listando Itens')
@section('subtitle', 'Venda #1')
            
@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Produto</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Valor Unitário</th>
        <th scope="col">Valor Total</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Celular</td>
        <td class="qtd">2</td>
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



@endsection