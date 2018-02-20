<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContasEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('contas_empresa', function (Blueprint $table) {
            $table->integer('codempresa')->default(1);
            $table->integer('codfilial')->default(1);
            $table->increments('codbanco');
            $table->char('banco',3);
            $table->char('nome',30);
            $table->char('agencia',4);
            $table->char('dgt_agencia',1);
            $table->char('conta',10);
            $table->char('dgt_conta',2);
            $table->char('ativa',1);
            $table->char('titular',40);
            $table->char('apelido',10);
            $table->char('conta_padrao',1);
            $table->char('so_master',1)->default('N');
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
        Schema::dropIfExists('contas_empresa');
    }
}
