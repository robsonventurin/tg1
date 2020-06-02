<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enderecos extends Model
{
    use SoftDeletes;

    protected $primaryKey = "id";
    protected $table = "enderecos";

    function cidade(){
        return $this->belongsTo('App\Cidade', 'id_cidades', 'id');
    }

    function completo() {
        return $this->logradouro . ', ' . $this->numero . ' - ' . $this->cidade->nome . '/' . $this->cidade->estado;
    }
}
