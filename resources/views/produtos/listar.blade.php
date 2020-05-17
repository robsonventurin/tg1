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
      <tr>
        <th scope="row">1</th>
        <td>Celular</td>
        <td>Celular muito bom esse</td>
        <td>2</td>
        <td>/celular/testando/top</td>
        <td>R$ 350,00</td>
        <td>Celulares/Smartphones</td>
        <td>
          <a href="/produtos/alterar/1">Alterar</a> -
          <a href="#">Excluir</a> 
        </td>
      </tr>
    </tbody>
  </table>

  <a href="/produtos/adicionar" class="btn btn-black py-3 px-5 btn-block">Adicionar Novo</a>


@endsection