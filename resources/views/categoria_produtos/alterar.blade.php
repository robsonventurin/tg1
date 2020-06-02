@extends('layouts.default')

@section('title', 'Alterando Categoria de Produtos')
@section('subtitle', '\'Nome Da Categoria\'')
            
@section('content')

<form action="{{ route('alterarCategoriaProduto', ['id'=>$c->id]) }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Nome da categoria</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nome da categoria" value="{{ $c->nome }}">
  </div>
  <div class="form-group">
    <label for="categoria_pai">Categoria Pai</label>
    <select class="form-control" id="categoria_pai" name="categoria_pai">
      <option value="0">Nenhuma categoria pai</option>
      
      @foreach($pais as $p)
        @if($p->id != $c->id)
          <option value="{{ $p->id }}" @if($p->id == $c->categoria_pai) selected @endif>#{{ $p->id }} - {{ $p->nome }}</option>
        @endif
      @endforeach
    </select>
    <small id="emailHelp" class="form-text text-muted">Caso seja uma sub-categoria, selecionar acima quem é sua categoria "pai".</small>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Alterar</button>
</form>


@endsection