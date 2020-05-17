@extends('layouts.default')

@section('title', 'Alterando Produtos')
@section('subtitle', '\'Nome Do Produto\'')
            
@section('content')

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Descrição</label>
    <textarea class="form-control" id="exampleInputEmail1"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Quantidade Estoque</label>
    <input type="number" step="1" min="0" max="999" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Valor</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Categoria</label>
    <select class="form-control" id="exampleInputPassword1">
      <option>#1 - Teste</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Categoria Pai</label>
    <select class="form-control" id="exampleInputPassword1">
      <option>Nenhuma categoria pai</option>
      <option>#1 - Teste</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">Caso seja uma sub-categoria, selecionar acima quem é sua categoria "pai".</small>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Alterar</button>
</form>


@endsection