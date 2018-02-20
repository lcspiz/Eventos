<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codempresa')->default(1);
            $table->integer('codfilial')->default(1);
            $table->char('cnpj',14);
            $table->char('rg',20);
            $table->char('nome',20);
            $table->char('email',60);
            $table->char('endereco',40);
            $table->char('numero',11);
            $table->char('cep',9);
            $table->char('complemento',20);
            $table->char('bairro',30);
            $table->char('cidade',30);
            $table->char('uf',2);
            $table->char('fone1',15);
            $table->char('fone2',15);
            $table->char('celular',15);
            $table->char('fantasia',30);
            $table->char('site',40);
            $table->longtext('observacao');
            $table->decimal('comissao', 4, 2);
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
        Schema::dropIfExists('vendedores');
    }
}
