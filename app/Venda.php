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
    	return $this->belongsTo('App\User', 'id_usuario', 'id');
    }
}
