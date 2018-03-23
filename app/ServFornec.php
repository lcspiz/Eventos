<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServFornec extends Model
{
    //
    public $table = ['serv_fornec'];

    protected $fillable = ['codfornec','codserv1','descserv1','codserv3','descserv3','valorserv3','valorserv2','codserv2','descserv2'];

    protected $primaryKey = 'codfornec';

}
