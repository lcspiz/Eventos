<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casting', function (Blueprint $table) {
            $table->increments('id');
            $table->char('cpf',14);
            $table->char('rg',20);
            $table->char('nome',20);
            $table->char('snome',20);
            $table->char('nascimento',10);
            $table->boolean('ativo');
            $table->char('email',60);
            $table->char('email2',60);
            $table->char('endereco',40);
            $table->char('numero',11);
            $table->char('cep',9);
            $table->char('complemento',20);
            $table->char('bairro',30);
            $table->char('cidade',30);
            $table->char('uf',2);
            $table->char('sexo',2);
            $table->char('classificacao',1);
            $table->char('foneres',15);
            $table->char('fone1',15);
            $table->char('fone2',15);
            $table->char('social',40);
            $table->char('estado_civil',15);
            $table->char('contato',60);
            $table->char('apelido',60);
            $table->char('banco',20)->nullable();
            $table->char('agencia',4)->nullable();
            $table->char('conta',10)->nullable();
            $table->char('tipo',2)->nullable();
            $table->char('titular',20)->nullable();
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
        Schema::dropIfExists('casting');
    }
}
