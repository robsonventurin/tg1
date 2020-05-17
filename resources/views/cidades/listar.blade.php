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
      <tr>
        <th scope="row">1</th>
        <td>Campos Novos</td>
        <td>SC</td>
        <td>
          <a href="/cidades/alterar/1">Alterar</a> -
          <a href="#">Excluir</a> 
        </td>
      </tr>
    </tbody>
  </table>

  <a href="/cidades/adicionar" class="btn btn-black py-3 px-5 btn-block">Adicionar Novo</a>


@endsection