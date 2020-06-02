@extends('layouts.default')

@section('title', 'Adicionando')
@section('subtitle', 'Categoria de Produtos')
            
@section('content')

<form action="{{ route('cadastrarCategoriaProduto') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Nome da categoria</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nome da categoria">
  </div>
  <div class="form-group">
    <label for="categoria_pai">Categoria Pai</label>
    <select class="form-control" id="categoria_pai" name="categoria_pai">
      <option value="0">Nenhuma categoria pai</option>
      
      @foreach($pais as $p)
        <option value="{{ $p->id }}">#{{ $p->id }} - {{ $p->nome }}</option>
      @endforeach
    </select>
    <small id="emailHelp" class="form-text text-muted">Caso seja uma sub-categoria, selecionar acima quem é sua categoria "pai".</small>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>


@endsection