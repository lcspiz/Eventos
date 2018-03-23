<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casting extends Model
{
    //
    protected $table = 'casting';

    protected $fillable = ['cpf','rg','nome','snome','nascimento','email','email2','endereco','numero','cep','complemento','bairro','cidade','uf','sexo','classificacao','foneres','fone1','fone2','social','estado_civil','banco','agencia','conta','tipo','titular','cpfconta','contato','apelido','ativo'];
}
