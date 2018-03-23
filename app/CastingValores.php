<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CastingValores extends Model
{
    //
    protected $table = 'casting_valores';

    public $timestamps = false;

    protected $fillable = ['codigo_tipo','codigo_variaveis','codigo_casting','valores','descricao'];
}
