<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentosValoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos_valores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_orcamento');
            $table->char('grupo',3);
            $table->char('subgrupo',3);
            $table->char('item')->nullable();
            $table->char('descitem')->nullable();
            $table->char('qtde',3);
            $table->char('dias',4);
            $table->char('custoun',10);
            $table->char('custotot',10);
            $table->char('valorun',10);
            $table->char('valortot',10);
            $table->char('rentabilidade',4);
            $table->char('porcent',5);
            $table->char('obsitem',80)->nullable();
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
        Schema::dropIfExists('orcamentos_valores');
    }
}
