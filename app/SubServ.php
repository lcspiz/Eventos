<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubServ extends Model
{
    //
    public $table = ['subserv'];

    protected $fillable = ['codserv1','descserv1','codserv3','descserv3','valorserv3','valorserv2','codserv2','descserv2'];

    protected $primaryKey = 'id';

}
