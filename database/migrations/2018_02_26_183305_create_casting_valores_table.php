<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastingValoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casting_valores', function (Blueprint $table) {
            $table->char('codigo_tipo',3);
            $table->char('codigo_variaveis',3);
            $table->char('descricao',50);
            $table->char('codigo_casting',5);
            $table->char('valores',10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casting_valores');
    }
}
