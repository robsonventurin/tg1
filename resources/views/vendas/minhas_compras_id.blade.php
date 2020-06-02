@extends('layouts.default')

@section('title', 'Minha Compra')

@section('subtitle')
  Id #{{ $venda->id }}
@endsection
            
@section('content')
  @php
    $total = 0;
  @endphp
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
      @foreach($produtos as $p)
        @php
          $total = $total + ($p['info']->valor * $p['qtd']);
        @endphp
        <tr>
          <th scope="row">{{ $p['id'] }}</th>
          <td>{{ $p['info']->nome }}</td>
          <td class="qtd">{{ $p['qtd'] }}</td>
          <td>@money($p['info']->valor)</td>
          <td>@money($p['info']->valor * $p['qtd'])</td>
        </tr>
      @endforeach
      <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col" style="text-align:right;">Totalizando:</th>
        <th scope="col">@money($total)</th>
      </tr>
    </tbody>
  </table>

  @if (isset($venda->endereco))
    <p>Endereço de entrega: {{ $venda->endereco->completo() }}</p>
  @endif
  <a href="{{ url()->previous() }}" class="btn btn-secondary py-3 px-5 btn-block mt-2">Voltar</a>


@endsection