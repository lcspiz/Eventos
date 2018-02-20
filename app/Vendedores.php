<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    //
    protected $table = 'vendedores';

    protected $fillable = ['cnpj','rg','nome','email','endereco','numero','cep','complemento','bairro','cidade','uf','fone1','fone2','celular','fantasia','site','observacao','banco','agencia','conta','tipo','titular','cpfconta','comissao'];

}
