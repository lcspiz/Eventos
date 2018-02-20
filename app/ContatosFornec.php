<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatosFornec extends Model
{
    //
    protected $table = 'contatos_fornec';
    protected $fillable = ['id_fornec','nome','cargo','email','fone','observacao'];

    public function fornecedores(){
    	return $this->hasOne('App\Fornecedores');
    }

}
