@extends('layouts.default')

@section('title', 'Alterando Cidades')
@section('subtitle', '\'Nome Da Cidade\'')
            
@section('content')

<form action="{{ route('alterarCidade', ['id'=> $c->id]) }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ $c->nome }}">
  </div>
  <div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" value="{{ $c->estado }}">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>



@endsection