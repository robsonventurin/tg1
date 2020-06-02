@extends('layouts.default')

@section('title', 'Página Inicial')
@section('subtitle', 'Últimos Lançamentos')
            
@section('content')

<div class="row">
    @foreach ($produtos as $p) 
        {{ $p->montaProduto() }}
    @endforeach
</div>

@endsection