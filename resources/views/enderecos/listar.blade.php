@extends('layouts.default')

@section('title', 'Listando')
@section('subtitle', 'Endereços')
            
@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Descrição</th>
        <th scope="col">Logradouro</th>
        <th scope="col">Número</th>
        <th scope="col">Bairro</th>
        <th scope="col">Cidade</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($enderecos as $e) 
      <tr>
        <th scope="row">{{ $e->id }}</th>
        <td>{{ $e->descricao }}</td>
        <td>{{ $e->logradouro }}</td>
        <td>{{ $e->numero }}</td>
        <td>{{ $e->bairro }}</td>
        <td>{{ $e->cidade->nome }} / {{ $e->cidade->estado }}</td>
        <td>
          <a href="{{ route('telaAlterarEndereco', ['id' => $e->id ]) }}">Alterar</a> -
          <a href="{{ route('excluirEndereco', ['id' => $e->id ]) }}">Excluir</a> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('telaCadastrarEndereco') }}" class="btn btn-black py-3 px-5 btn-block">Adicionar Novo</a>


@endsection