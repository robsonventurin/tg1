<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriaProdutos extends Model
{
    use SoftDeletes;
	
    protected $primaryKey = "id";
    protected $table = "categoria_produtos";
}
