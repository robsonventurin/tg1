@extends('layouts.default')

@section('title', 'Listando')
@section('subtitle', 'Produtos')
            
@section('content')

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Estoque</th>
        <th scope="col">Slug</th>
        <th scope="col">Valor</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($produtos as $p) 
      <tr>
        <th scope="row">{{ $p->id }}</th>
        <td>{{ $p->nome }}</td>
        <td>{{ $p->descricao }}</td>
        <td>{{ $p->estoque }}</td>
        <td>{{ $p->slug }}</td>
        <td>@money($p->valor)</td>
        <td>{{ $p->categoria->nome }}</td>
        <td>
        <a href="{{ route('telaAlterarProduto', ['id' => $p->id ]) }}">Alterar</a> -
          <a href="{{ route('excluirProduto', ['id' => $p->id ]) }}">Excluir</a> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{ route('telaCadastrarProduto') }}" class="btn btn-black py-3 px-5 btn-block">Adicionar Novo</a>

@endsection