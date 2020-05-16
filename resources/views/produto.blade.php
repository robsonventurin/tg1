@extends('layouts.default')

@section('title')
    <a href="#" style="color:#000; font-size:0.7em; text-decoration:none;">Voltar Para Página Anterior</a>
@endsection

@section('subtitle', 'Visualizando Produto')
            
@section('content')

      <div class="row">
        <div class="col-md-7">
          <div class="carousel slide" data-ride="carousel" id="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-dark.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-light.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-moon.svg">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
              </div>
            </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
        <div class="col-md-5">
          <h3>Display 1</h3>
          <p class="mt-4">R$ 1.400,00<br>10x <b>R$ 140,00</b> sem juros</´p>
          <p class="lead mb-4">Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Mé faiz elementum girarzis, nisi eros vermeio. Casamentiss faiz malandris se pirulitá. Viva Forevis aptent taciti sociosqu ad litora torquent.</p>
          <a href="#" class="btn btn-black py-3 px-5">Adicionar Ao Carrinho</a>
        </div>
      </div>

@endsection