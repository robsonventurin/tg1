<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data');
            $table->float('valor_total');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_enderecos');
            $table->softDeletes();
            
            $table->timestamps();
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_enderecos')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
