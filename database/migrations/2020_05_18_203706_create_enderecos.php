<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 200);
            $table->string('logradouro', 200);
            $table->integer('numero');
            $table->string('bairro', 200);
            $table->unsignedBigInteger('id_cidades');
            $table->softDeletes();
            
            $table->timestamps();
            $table->foreign('id_cidades')->references('id')->on('cidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
