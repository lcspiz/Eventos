<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubservTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subserv', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codserv1');
            $table->string('descserv1');
            $table->integer('codserv2');
            $table->string('descserv2');
            $table->decimal('valorserv2', 8, 2);
            $table->integer('codserv3')->nullable();
            $table->decimal('valorserv3', 8, 2)->nullable();
            $table->string('descserv3')->nullable();
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
        Schema::dropIfExists('subserv');
    }
}
