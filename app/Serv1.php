<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serv1 extends Model
{
    //
    	protected $table = "serv1";

    	protected $fillable = ['codigo','descricao'];

    	protected $primaryKey = 'codigo';

    	public $incrementing = false;

    	public function serv2(){
    		return $this->hasMany('App\Serv2','codserv1');
    	}
}
