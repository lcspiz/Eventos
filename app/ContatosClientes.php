<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatosClientes extends Model
{
    //
    protected $table = 'contatos_clientes';
    protected $fillable = ['id_cliente','nome','cargo','email','fone','observacao'];


    public function clientes(){
    	return $this->hasOne('App\Clientes');
    }
}
