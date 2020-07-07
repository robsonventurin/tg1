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
        <th scope="col">Situação Pagamento</th>
        <th scope="col">Situação Entrega</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($vendas as $v) 
          <tr>
            <th scope="row">{{ $v->id }}</th>
            <td>{{ $v->usuario->name }}</td>
            <td>{{ $v->usuario->created_at }}</td>
            <td>@money($v->valor_total)</td>
            <td>{{ $v->status_pagamento }}</td>
            <td>{{ $v->status_entrega }}</td>
            <td><a href="{{ route('detalha_minhas_compras', [ 'id' => $v->id ]) }}">Ver Produtos</a></td>
          </tr>
      @endforeach
    </tbody>
  </table>



@endsection