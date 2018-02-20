<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServ2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serv2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codserv1')->unsigned();
            $table->foreign('codserv1')->references('codigo')->on('serv1');
            $table->string('descserv1');
            $table->integer('codigo')->unsigned();
            $table->decimal('valor', 8, 2);
            $table->string('descricao');
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
        Schema::dropIfExists('serv2');
    }
}
