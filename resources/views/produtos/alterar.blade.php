@extends('layouts.default')

@section('title', 'Alterando Produtos')
@section('subtitle', '\'Nome Do Produto\'')
            
@section('content')

<form action="{{ route('alterarProduto', ['id' => $p->id]) }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ $p->nome }}">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea class="form-control" id="descricao" name="descricao">{{ $p->descricao }}</textarea>
  </div>
  <div class="form-group">
    <label for="qtd">Quantidade Estoque</label>
    <input type="number" step="1" min="0" max="999" class="form-control" id="qtd" name="qtd"  value="{{ $p->qtd }}">
  </div>
  <div class="form-group">
    <label for="valor">Valor</label>
    <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" value="{{ $p->valor }}">
  </div>
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <select class="form-control" id="categoria" name="categoria">
      @foreach($categorias as $c) 
        <option value="{{ $c->id }}" @if($c->id == $p->id_categoria_produtos) selected @endif>#{{ $c->id}} - {{ $c->nome }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>


@endsection