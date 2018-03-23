<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serv2 extends Model
{
    //
	protected $table = "subgrupos";

	protected $fillable = ['codserv1','codigo','descricao','valor','descserv1'];

	protected $primaryKey = 'codigo';

	public $incrementing = false;

}
