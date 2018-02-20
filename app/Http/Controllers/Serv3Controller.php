<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Serv2;
use App\Serv1;
use App\Serv3;


class Serv3Controller extends Controller
{
    //
    public function index(){
    $serv3 = Serv3::get()->all();

    return view('serv3')->with('serv3',$serv3);
    }

    public function create(){
    	 $serv1 = DB::table('serv1')->orderBy('codigo')->get();

    	 return view('serv3create')->with('servicos1',$serv1);
    }

    public function getNv2($id){

    	$serv2 = DB::table("serv2")->where("codserv1",$id)->pluck("codigo","descricao");

        return json_encode($serv2);
    }

    public function edit($id){

         $serv1 = DB::table('serv1')->orderBy('codigo')->get();
         $serv3edit = Serv3::where('codigo','=',$id)->first();

         return view('serv3edit')->with('servicos1',$serv1)->with('servicos3',$serv3edit);

    }

    public function delete($id){
        $serv3delete = Serv3::where('codigo','=',$id)->first();
        $serv3delete->delete();

        return redirect()->route('serv3');
    }

    public function store(Request $request){

    }
}
