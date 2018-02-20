<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosfornecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos_fornec', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_fornec')->unsigned();
            $table->foreign('id_fornec')->references('id')->on('fornecedores');
            $table->char('nome',20);
            $table->char('cargo',20);
            $table->char('email',40);
            $table->char('fone',11);
            $table->char('observacao',9);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos_fornec');
    }
}
