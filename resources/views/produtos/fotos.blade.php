@extends('layouts.default')

@section('title', 'Visualizando Fotos')
@section('subtitle')
  #{{ $produto->id }} - {{ $produto->nome }}
@endsection
            
@section('content')

<p> Fotos já cadastradas (clique na foto para excluir): </p>
@foreach($fotos as $f) 
<div class="form-group">
  <a href="{{ route('excluirFotoProduto', ['id'=>$f->id]) }}"><img src="{{ asset('storage/' . $f->nome) }}" width="50px"></a>
</div>

@endforeach

<br><br>
<form action="{{ route('cadastrarFotoProduto', ['id'=>$produto->id]) }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="foto">Nova Foto:</label>
    <input type="file" class="form-control-file" id="foto" name="foto">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Cadastrar Nova Foto</button>
</form>


@endsection