@extends('layouts.default')

@section('title', 'Adicionando')
@section('subtitle', 'Cidades')
            
@section('content')

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Estado</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Estado">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>


@endsection