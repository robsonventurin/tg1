@extends('layouts.default')

@section('title', 'Adicionando')
@section('subtitle', 'Categoria de Produtos')
            
@section('content')

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome da categoria</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome da categoria">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Categoria Pai</label>
    <select class="form-control" id="exampleInputPassword1">
      <option>Nenhuma categoria pai</option>
      <option>#1 - Teste</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">Caso seja uma sub-categoria, selecionar acima quem é sua categoria "pai".</small>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>


@endsection