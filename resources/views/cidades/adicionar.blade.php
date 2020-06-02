@extends('layouts.default')

@section('title', 'Adicionando')
@section('subtitle', 'Cidades')
            
@section('content')

<form action="{{ route('cadastrarCidade') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>


@endsection