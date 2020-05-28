@extends('layouts.default')

@section('title', 'Listando')
@section('subtitle', 'Vendas')
            
@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Cliente</th>
        <th scope="col">Data</th>
        <th scope="col">Valor Total</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Robson</td>
        <td>14/05/2020</td>
        <td>R$ 700,00</td>
        <td>
          <a href="/vendas/listar/itens/1">Visualizar Itens</a>
        </td>
      </tr>
    </tbody>
  </table>



@endsection