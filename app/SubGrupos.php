<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SubGrupos extends Model
{
    //

        protected $table = "subgrupo";

    	protected $fillable = ['id_grupo','id','descricao','valor'];

    	public $incrementing = false;
}
