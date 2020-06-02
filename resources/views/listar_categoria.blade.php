@extends('layouts.default')

@section('title', 'Listando Categoria')
@section('subtitle')
    @isset($categoria)
        {{ $categoria->nome }}
    @else 
        'Todas As Categorias'
    @endisset    
@endsection
            
@section('content')

<div class="row">
    @foreach ($produtos as $p) 
        {{ $p->montaProduto() }}
    @endforeach
</div>

@endsection