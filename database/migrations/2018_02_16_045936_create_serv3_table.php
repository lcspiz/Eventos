<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServ3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serv3', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codserv1')->unsigned();
            $table->string('descserv1');
            $table->integer('codserv2')->unsigned();
            $table->string('descserv2');
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
        Schema::dropIfExists('serv3');
    }
}
