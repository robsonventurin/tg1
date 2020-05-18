<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200);
            $table->string('descricao', 200);
            $table->integer('qtd');
            $table->string('slug')->nullable();
            $table->float('valor');
            $table->unsignedBigInteger('id_categoria_produtos');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('id_categoria_produtos')->references('id')->on('categoria_produtos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
