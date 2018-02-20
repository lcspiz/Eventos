<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContaCorrente extends Model
{
	protected $primaryKey = 'codbanco';
    protected $table = 'contas_empresa';
    protected $fillable = ['banco','nome','agencia','dgt_agencia','conta','dgt_conta','ativa','titular','apelido','conta_padrao'];
}
