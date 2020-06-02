<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('users', function (Blueprint $table){
           $table->string('cpf', 14)->nullable();
           $table->string('rg', 9)->nullable();
           $table->date('data_nasc')->nullable();
           $table->string('telefone',20)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('cpf');
        $table->dropColumn('rg');
        $table->dropColumn('data_nasc');
        $table->dropColumn('telefone');
    }
}
