<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    //
        protected $table = "items";

    	protected $fillable = ['grupo','subgrupo','item','descricao','valor'];

    	public $incrementing = false;
}
