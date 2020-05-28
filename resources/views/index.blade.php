@extends('layouts.default')

@section('title', 'Página Inicial')
@section('subtitle', 'Últimos Lançamentos')
            
@section('content')

<div class="row">
    <?php for($i = 0;$i <= 5; $i++) { ?>
    <div class="col-md-4 p-3 produto">
        <div class="card box-shadow">
        <a href="/produto/1" class="image" style="background-image:url('https://i.imgur.com/P8VNTVl.jpg')">
            
        </a>
        <div class="card-body">
            <p><a href="/produto/1" class="card-text">Smartphone Samsung Galaxy A10 32GB Dual Chip Android 9.0 Tela 6.2" Octa-Core 4G Câmera 13MP - Preto</a></p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="/produto/1" class="btn btn-sm btn-outline-secondary">Visualizar Produto<br></a>
            </div>
            <small class="text-muted">R$ 1.400,00<br>10x <b>R$ 140,00</b> sem juros</small>
            </div>
        </div>
        </div>
    </div>
    <?php } ?>
</div>

@endsection