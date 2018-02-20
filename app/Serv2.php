<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serv2 extends Model
{
    //
    protected $table = "serv2";

    	protected $fillable = ['codserv1','codigo','descricao','valor','descserv1'];

    	protected $primaryKey = 'codigo';

    	public $incrementing = false;

    	public function serv1(){
    		return $this->belongsTo('App\Serv1');
    	}
}
