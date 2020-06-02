@extends('layouts.default')

@section('title', 'Adicionando')
@section('subtitle', 'Produtos')
            
@section('content')

<form action="{{ route('cadastrarProduto') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea class="form-control" id="descricao" name="descricao"></textarea>
  </div>
  <div class="form-group">
    <label for="qtd">Quantidade Estoque</label>
    <input type="number" step="1" min="0" max="999" class="form-control" id="qtd" name="qtd">
  </div>
  <div class="form-group">
    <label for="valor">Valor</label>
    <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor">
  </div>
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <select class="form-control" id="categoria" name="categoria">
      @foreach($categorias as $c) 
        <option value="{{ $c->id }}">#{{ $c->id}} - {{ $c->nome }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>


@endsection