@extends('layouts.default')

@section('title', 'Resultados De')
@section('subtitle')
    '{{ $termo }}'
@endsection
            
@section('content')

<div class="row">
    @foreach ($produtos as $p) 
        {{ $p->montaProduto() }}
    @endforeach
</div>

@endsection