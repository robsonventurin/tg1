<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venda extends Model
{
    use SoftDeletes;

    protected $primaryKey = "id";
    protected $table = "vendas";

    function usuario(){
    	return $this->belongsTo('App\User', 'id_users', 'id');
    }

    function produtos(){
    	return $this->belongsToMany('App\Produto', 'vendas_has_produtos', 'id_venda', 'id_produto')->withPivot(['id', 'quantidade', 'subtotal'])->withTimestamps();
    }

    function endereco(){
    	return $this->belongsTo('App\Enderecos', 'id_enderecos', 'id');
    }
}
