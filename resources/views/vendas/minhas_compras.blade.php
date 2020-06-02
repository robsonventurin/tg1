@extends('layouts.default')

@section('title')
    <a href="{{ route('index') }} " style="color:#000; font-size:0.7em; text-decoration:none;">Continuar Comprando</a>
@endsection

@section('subtitle', 'Carrinho De Compras')
            
@section('content')
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Cliente</th>
        <th scope="col">Valor Total</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($vendas as $v) 
          <tr>
            <th scope="row">{{ $v->id }}</th>
            <td>{{ $v->usuario->name }}</td>
            <td>@money($v->valor_total)</td>
            <td><a href="{{ route('detalha_minhas_compras', [ 'id' => $v->id ]) }}">Ver Produtos</a></td>
          </tr>
      @endforeach
    </tbody>
  </table>

@endsection