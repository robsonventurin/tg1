<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlteraFotoProdutosAddProdutoId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('fotos_produtos', function (Blueprint $table){
            $table->unsignedBigInteger('produto_id');
            
            $table->foreign('produto_id')->references('id')->on('produtos');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
