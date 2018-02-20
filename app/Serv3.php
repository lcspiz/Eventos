<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serv3 extends Model
{
    //
        protected $table = "serv3";

    	protected $fillable = ['codserv1','codigo','descricao','valor','descserv1','codserv2','descserv2'];

    	protected $primaryKey = 'codigo';

}
