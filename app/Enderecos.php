<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enderecos extends Model
{
    use SoftDeletes;

    protected $primaryKey = "id";
    protected $table = "enderecos";

    function usuario(){
    	return $this->belongsTo('App\User', 'id_usuario', 'id');
    }
}
