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
      <tr>
        <th scope="row">1</th>
        <td>Residencial</td>
        <td>Rua Coronel Osório Fagundes</td>
        <td>247</td>
        <td>Jardim Bela Vista</td>
        <td>Campos Novos / SC</td>
        <td>
          <a href="/enderecos/alterar/1">Alterar</a> -
          <a href="#">Excluir</a> 
        </td>
      </tr>
    </tbody>
  </table>

  <a href="/enderecos/adicionar" class="btn btn-black py-3 px-5 btn-block">Adicionar Novo</a>


@endsection