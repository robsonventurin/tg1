@extends('layouts.default')

@section('title', 'Alterando')
@section('subtitle', 'Endereço #1')
            
@section('content')

<form action="{{ route('alterarEndereco', ['id'=>$e->id]) }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{ $e->descricao }}">
  </div>
  <div class="form-group">
    <label for="logradouro">Logradouro</label>
    <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" value="{{ $e->logradouro }}">
  </div>
  <div class="form-group">
    <label for="numero">Número</label>
    <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" value="{{ $e->numero }}">
  </div>
  <div class="form-group">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="{{ $e->bairro }}">
  </div>
  <div class="form-group">
    <label for="id_cidades">Cidade</label>
    <select class="form-control" name="id_cidades">
      @foreach($cidades as $c) 
        <option value="{{ $c->id }}" @if($c->id == $e->id_cidades) selected @endif>#{{ $c->id }} - {{ $c->nome }} / {{ $c->estado }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>



@endsection