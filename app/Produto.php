<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Produto extends Model
{
    use SoftDeletes;
    use HasSlug;

    protected $primaryKey = "id";
    protected $table = "produtos";

    /**
     * Get the options for generating the slug
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
                            ->generateSlugsFrom('nome')
                            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    function vendas(){
    	return $this->belongsToMany('App\Venda', 'vendas_has_produtos', 'id_produto', 'id_venda')->withPivot(['quantidade', 'subtotal'])->withTimestamps();
    }
	
   function categoria(){
        return $this->belongsTo('App\CategoriaProdutos', 'id_categoria_produtos', 'id');
    }

    function fotos(){
    	return $this->hasMany('App\FotoProduto');
    }

    function montaProduto() {
        $p = $this;
        $foto = $this->fotos->first();

        if ($foto != null) {
            $nf = $foto->nome;
        } else {     
            $nf = '';
        }
    

        echo '
            <div class="col-md-4 p-3 produto">
                <div class="card box-shadow">
                <a href="'.route('mostra_produto', ['id'=>$p->id, 'nome'=>$p->slug]).'" class="image" style="background-image:url(\''.asset('storage/'.$nf).'\')">
                    
                </a>
                <div class="card-body">
                    <p><a href="'.route('mostra_produto', ['id'=>$p->id, 'nome'=>$p->slug]).'" class="card-text">'. $p->nome  .'</a></p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="'.route('mostra_produto', ['id'=>$p->id, 'nome'=>$p->slug]).'" class="btn btn-sm btn-outline-secondary">Visualizar Produto<br></a>
                    </div>
                    <small class="text-muted">R$ '.number_format($p->valor, 2, ',', '.').'<br>10x <b>R$ '.number_format($p->valor / 10, 2, ',', '.').'</b> sem juros</small>
                    </div>
                </div>
                </div>
            </div>
        ';
    }
}