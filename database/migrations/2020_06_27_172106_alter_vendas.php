<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('vendas', function (Blueprint $table){
            $table->string('status_entrega', 200)->nullable();
            $table->string('status_pagamento', 200)->nullable();
            
 
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('status_entrega');
        $table->dropColumn('status_pagamento');
    }
}
