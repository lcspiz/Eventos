<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrcamentosValores extends Model
{
    //
    protected $table = 'orcamentos_valores';

    protected $fillable = ['id_orcamento','grupo','subgrupo','item','descitem','qtde','dias','custoun','custotot','valorun','valortot','rentabilidade','porcent','obsitem'];
}
