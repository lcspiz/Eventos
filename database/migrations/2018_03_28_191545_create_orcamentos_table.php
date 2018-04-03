<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codempresa')->default(1);
            $table->integer('codfilial')->default(1);
            $table->integer('orcamento')->nullable();
            $table->char('versao',2)->default(0);
            $table->char('cliente',10);
            $table->char('apresentacao',10)->nullable();
            $table->char('hrapresentacao',40)->nullable();
            $table->char('dt_final',10)->nullable();
            $table->char('meio',60)->nullable();
            $table->char('especie',60)->nullable();
            $table->char('produto',60)->nullable();
            $table->char('titulo',60)->nullable();;
            $table->char('formato',60)->nullable();
            $table->char('validade',15)->nullable();
            $table->char('campanha',60)->nullable();
            $table->char('job',5)->nullable();
            $table->char('descricao',60)->nullable();;
            $table->char('dt_inicio',10)->nullable();
            $table->char('responsavel',60)->nullable();
            $table->char('prz_entrega',10)->nullable();
            $table->char('orcamento_ori',10)->nullable();
            $table->char('versao_ori',2)->nullable();
            $table->char('hrentrega',10)->nullable();
            $table->char('printcliente',1)->nullable();
            $table->char('status',1)->nullable();
            $table->char('motivodeclinio',1)->nullable();
            $table->char('usuario',4)->nullable();
            $table->char('dt_declinio',1)->nullable();
            $table->char('cod_declinio',1)->nullable();
            $table->char('praca',60)->nullable();
            $table->char('hr_inicio',10)->nullable();
            $table->char('hr_final',10)->nullable();
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
        Schema::dropIfExists('orcamentos');
    }
}
