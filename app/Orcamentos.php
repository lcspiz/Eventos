<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamentos extends Model
{
    //
	protected $table = 'orcamentos';
	
    protected $fillable = ['orcamento','versao','cliente','apresentacao','hrapresentacao','dt_final','meio','especie','produto','titulo','formato','validade','campanha','job','descricao','dt_inicio','responsavel','prz_entrega','orcamento_ori','versao_ori','hrentrega','printcliente','status','motivodeclinio','usuario','dt_declinio','cod_declinio','praca','hr_inicio','hr_final'];

}
