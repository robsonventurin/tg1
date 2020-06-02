@extends('layouts.default')

@section('title')
    <a href="{{ url()->previous() }}" style="color:#000; font-size:0.7em; text-decoration:none;">Continuar Comprando</a>
@endsection

@section('subtitle', 'Carrinho De Compras')
            
@section('content')
  @if(session()->has('mensagem'))
    {{ session('mensagem') }}<br><br>
  @endif

  @php
    $total = 0;
  @endphp
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
      @foreach($produtos as $p)
        @php
          $total = $total + ($p['info']->valor * $p['qtd']);
        @endphp
        <tr>
          <th scope="row">{{ $p['id'] }}</th>
          <td>{{ $p['info']->nome }}</td>
          <td class="qtd">
            <a href="{{ route('carrinho_diminuir', [ 'id' => $p['id'] ]) }}">-</a>
            <span>{{ $p['qtd'] }}</span>
            <a href="{{ route('carrinho_adicionar', [ 'id' => $p['id'] ]) }}">+</a>
          </td>
          <td><a href="{{ route('carrinho_excluir', [ 'id' => $p['id'] ]) }}">Excluir</a></td>
          <td>@money($p['info']->valor)</td>
          <td>@money($p['info']->valor * $p['qtd'])</td>
        </tr>
      @endforeach
      <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col" style="text-align:right;">Totalizando:</th>
        <th scope="col">@money($total)</th>
      </tr>
    </tbody>
  </table>
  <form action="{{ route('carrinho_finalizar') }}" method="GET">
  @csrf
  
    <div class="form-group">
      <label for="endereco_entrega">Endereço de Entrega</label>
      <select class="form-control" name="endereco_entrega">
        @foreach($enderecos as $e) 
          <option value="{{ $e->id }}">{{ $e->completo() }}</option>
        @endforeach
      </select>
  </div>
    <button type="submit" class="btn btn-black py-3 px-5 btn-block">Finalizar Compra</button>
    <!--<a href="{{ route('carrinho_finalizar') }}" class="btn btn-black py-3 px-5 btn-block">Finalizar Compra OLD</a>-->
    <a href="#" class="btn btn-secondary py-3 px-5 btn-block mt-2">Continuar Comprando</a>
  
</form>


@endsection