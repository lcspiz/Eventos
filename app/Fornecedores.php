<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    //
    protected $table = 'fornecedores';

    protected $fillable = ['cnpj','rg','nome','email','endereco','numero','cep','complemento','bairro','cidade','uf','fone1','fone2','celular','fantasia','site','observacao','banco','agencia','conta','tipo','titular','cpfconta'];

    public function contatos(){
    	return $this->hasMany('App\Contatos');
    }

}
