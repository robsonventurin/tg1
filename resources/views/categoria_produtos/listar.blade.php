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
      <tr>
        <th scope="row">1</th>
        <td>Celular</td>
        <td>2</td>
        <td>
          <a href="/categoria_produtos/alterar/1">Alterar</a> -
          <a href="#">Excluir</a> 
        </td>
      </tr>
    </tbody>
  </table>

  <a href="/categoria_produtos/adicionar" class="btn btn-black py-3 px-5 btn-block">Adicionar Novo</a>


@endsection