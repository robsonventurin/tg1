@extends('layouts.default')

@section('title')
    <a href="{{ url()->previous() }}" style="color:#000; font-size:0.7em; text-decoration:none;">Voltar Para Página Anterior</a>
@endsection

@section('subtitle', 'Visualizando Produto')
            
@section('content')
  @if(session()->has('mensagem'))
    {{ session('mensagem') }}<br><br>
  @endif
      @php $i = 0; @endphp
      <div class="row">
        <div class="col-md-7">
          <div class="carousel slide" data-ride="carousel" id="carousel">
            <div class="carousel-inner">
              @foreach ($produto->fotos as $f) 
              @php $i++; @endphp
              <div class="carousel-item @if($i == 1) active @endif"> <img class="d-block img-fluid w-100" src="{{ asset('storage/'.$f->nome) }}">
                <div class="carousel-caption">
                  <!-- <h5 class="m-0">Carousel</h5>
                  <p>with controls</p> -->
                </div>
              </div>
              @endforeach
              
            </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
        <div class="col-md-5">
          <h3>{{ $produto->nome }}</h3>
          <p class="mt-4">@money($produto->valor)<br>10x <b>@money($produto->valor / 10)</b> sem juros</´p>
          <p class="lead mb-4">{{ $produto->descricao }}</p>
          <a href="{{ route('carrinho_adicionar', [ 'id' => $produto->id ]) }}" class="btn btn-black py-3 px-5">Adicionar Ao Carrinho</a>
        </div>
      </div>

@endsection