@extends('layouts.default')

@section('title', 'Listando')
@section('subtitle', 'Categoria de Produtos')
            
@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Categoria Pai</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categorias as $c) 
      <tr>
        <th scope="row">{{ $c->id }}</th>
        <td>{{ $c->nome }}</td>
        <td>{{ $c->categoria_pai }}</td>
        <td>
          <a href="{{ route('telaAlterarCategoriaProduto', ['id' => $c->id ]) }}">Alterar</a> -
          <a href="{{ route('excluirCategoriaProduto', ['id' => $c->id ]) }}">Excluir</a> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('telaCadastrarCategoriaProduto') }}" class="btn btn-black py-3 px-5 btn-block">Adicionar Novo</a>


@endsection