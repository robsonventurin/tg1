@extends('layouts.default')

@section('title', 'Listando')
@section('subtitle', 'Cidades')
            
@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Estado</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cidades as $c) 
      <tr>
        <th scope="row">{{ $c->id }}</th>
        <td>{{ $c-> nome}}</td>
        <td>{{ $c->estado }}</td>
        <td>
          <a href="{{ route('telaAlterarCidade', ['id' => $c->id ]) }}">Alterar</a> -
          <a href="{{ route('excluirCidade', ['id' => $c->id ]) }}">Excluir</a> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('telaCadastrarCidade') }}" class="btn btn-black py-3 px-5 btn-block">Adicionar Novo</a>


@endsection