@extends('layouts.default')

@section('title', 'Alterando')
@section('subtitle', 'Endereço #1')
            
@section('content')

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Descrição</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Descrição">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Logradouro</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Logradouro">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Número</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Bairro</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bairro">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cidade</label>
    <select class="form-control">
      <option>Campos Novos / SC</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Alterar</button>
</form>


@endsection