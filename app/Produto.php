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
	
   function categoria(){
        return $this->belongsTo('App\CategoriaProdutos', 'id_produto', 'id');
    }
}
