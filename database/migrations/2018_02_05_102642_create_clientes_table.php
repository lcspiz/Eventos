<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codempresa')->default(1);
            $table->integer('codfilial')->default(1);
            $table->char('cnpj',20)->nullable();
            $table->char('rg',23)->nullable();
            $table->char('nome',60);
            $table->char('email',60);
            $table->char('endereco',40);
            $table->char('numero',11);
            $table->char('cep',10);
            $table->char('complemento',20);
            $table->char('bairro',30);
            $table->char('cidade',30);
            $table->char('uf',2);
            $table->char('fone1',15)->nullable();
            $table->char('fone2',15)->nullable();
            $table->char('celular',15)->nullable();
            $table->char('fantasia',30)->nullable();;
            $table->char('site',40)->nullable();
            $table->longtext('observacao')->nullable();
            $table->char('banco',20)->nullable();
            $table->char('agencia',4)->nullable();
            $table->char('conta',10)->nullable();
            $table->char('tipo',2)->nullable();
            $table->char('titular',40)->nullable();
            $table->char('cpfconta',14)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
