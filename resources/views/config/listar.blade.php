@extends('layouts.default')

@section('title', 'Listando')
@section('subtitle', 'Configurações')
            
@section('content')

<form method="post" action="{{ route('alterarConfig') }}">
  @csrf
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Link</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($config as $c) 
      <tr>
        <th scope="row">{{ $c->id }}</th>
        <td>{{ $c->name }}</td>
        <td><input type="text" class="form-control" name="{{ $c->id }}" value="{{ $c->link }}"></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <button type="submit" class="btn btn-black py-3 px-5 btn-block">Salvar Configurações</button>
</form>

@endsection