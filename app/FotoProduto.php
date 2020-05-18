<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FotoProduto extends Model
{
    use SoftDeletes;

    protected $primaryKey = "id";
    protected $table = "fotos_produtos";
}
