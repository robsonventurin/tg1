<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171114699-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-171114699-1');
    </script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>Loja de Eletrônico - @yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light p-3" id="n-navbar">
      <div class="container">
        <a class="navbar-brand" href="/">Loja De Eletrônicos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#n-nav" aria-controls="n-nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="n-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/" class="nav-link">Página Inicial</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="/categoria/listar_todos">Ver Todas</a>
                <div class="dropdown-divider"></div>
                @php
                  use App\CategoriaProdutos;
                  $categorias = CategoriaProdutos::all();
                  
                  foreach($categorias as $c) {
                    echo '<a class="dropdown-item" href="/categoria/listar/'.$c->id.'">'.$c->nome.'</a>';
                  }
                  //dd($categorias);
                @endphp
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="1.html">1</a>
                <a class="dropdown-item" href="2.html">2</a>
                <a class="dropdown-item" href="3.html">3</a> -->
              </div>
            </li>
            @if(!is_null(Auth::user())) 
              <li class="dropown-item"><a href="/carrinho" class="nav-link">Carrinho</a></li>
            @endif

            @if(!is_null(Auth::user()) && Auth::user()->ehAdmin())
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administração</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{ route('telaListarCategoriaProduto') }}" class="nav-link">Categoria Produtos</a>
                  <a class="dropdown-item" href="{{ route('telaListarCidade') }}" class="nav-link">Cidades</a>
                  <a class="dropdown-item" href="{{ route('telaListarEndereco') }}" class="nav-link">Endereços</a>
                  <a class="dropdown-item" href="{{ route('telaListarProduto') }}" class="nav-link">Produtos</a>
                  <a class="dropdown-item" href="{{ route('telaListarVenda') }}" class="nav-link">Vendas</a>
                  <a class="dropdown-item" href="{{ route('telaDashboard') }}" class="nav-link">Dashboard</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('telaConfig') }}" class="nav-link">Configurações Gerais</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" class="nav-link">Sair</a>
                </div>
              </li>
            @elseif(!is_null(Auth::user())) 
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minha Página</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="/vendas/minhas_compras" class="nav-link">Minhas Compras</a>
                    <a class="dropdown-item" href="{{ route('telaListarEndereco') }}" class="nav-link">Meus Endereços</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" class="nav-link">Sair</a>
                  </div>
                </li>
              @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Minha Página</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                      <a class="dropdown-item" href="{{ route('login') }}" class="nav-link">Login</a>
                    </div>
                  </li>
            @endif
            
            

          </ul>
        </div>
      </div>
  </nav>


  <div id="banner_inicio" style="background-image:url('https://i.imgur.com/pS7QqVm.jpg');">
    <div class="container">
      <h2>@yield('title')</h2>
      <h1 class="mb-0">@yield('subtitle')</h1>
    </div>
  </div>



  <div class="bg-light py-5">
    <div class="container">

      @yield('content')

    </div>
  </div>






  <footer class="text-muted py-5" >
    <div class="container">
      <p class="float-right">
        <a href="#">De volta ao topo</a>
      </p>
      <p>Template desenvolvido para aula de Programação WEB.<br>Alunos do 5º período do curso de Sistemas De Informação - IFSC / Câmpus Caçador.</p>
    </div>
  </footer>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    @yield('script')
  </body>
</html>