<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //


    protected $table = 'clientes';
    protected $fillable = ['cnpj','rg','nome','email','endereco','numero','cep','complemento','bairro','cidade','uf','fone1','fone2','celular','fantasia','site','observacao','banco','agencia','conta','tipo','titular','cpfconta'];


    public function contatos(){
    	return $this->hasMany('App\Contatos');
    }

}
