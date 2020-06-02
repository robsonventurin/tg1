@extends('layouts.default')

@section('title', 'Adicionando')
@section('subtitle', 'Endereços')
            
@section('content')

<form action="{{ route('cadastrarEndereco') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
  </div>
  <div class="form-group">
    <label for="logradouro">Logradouro</label>
    <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
  </div>
  <div class="form-group">
    <label for="numero">Número</label>
    <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
  </div>
  <div class="form-group">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
  </div>
  <div class="form-group">
    <label for="id_cidades">Cidade</label>
    <select class="form-control" name="id_cidades">
      @foreach($cidades as $c) 
        <option value="{{ $c->id }}">#{{ $c->id }} - {{ $c->nome }} / {{ $c->estado }}</option>
      @endforeach
    </select>
  </div>
  <input type="text" class="form-control" id="id_users" name="id_users" style="display:none;" value="{{ Auth::user()->id }}">
  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>



@endsection