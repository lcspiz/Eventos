<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Serv2;
use App\Serv1;
use App\Serv3;
use App\SubServ;
use Session;


class Serv3Controller extends Controller
{
    //
    public function index(){
    $serv3 = DB::table('subserv')->whereNotNull('codserv3')->orderBy('codserv1','ASC')->orderBy('codserv2','ASC')->get();

    return view('serv3')->with('serv3',$serv3);
    }

    public function create(){
    	 $serv1 = DB::table('serv1')->orderBy('codigo')->get();

    	 return view('serv3create')->with('servicos1',$serv1);
    }

    public function getNv2($id){

    	$serv2 = DB::table("subserv")->where("codserv1",$id)->whereNull('codserv3')->orderBy('codserv2')->pluck("codserv2","descserv2");

        return json_encode($serv2);
    }

    public function getNv3($id){

        $serv3 = DB::table("subserv")->where("codserv2",$id)->whereNotNull('codserv3')->pluck("codserv3","descserv3");

        return json_encode($serv3);
    }

    public function edit($id){

         $serv1 = DB::table('serv1')->orderBy('codigo')->get();
       
         $serv3 = DB::table('subserv')->where('codserv3',"=",$id)->first();

         return view('serv3edit')->with('servicos1',$serv1)->with('servicos3',$serv3);

    }

    public function delete($id){
        $serv2 = DB::table('subserv')->where('codserv3',$id)->delete();

        Session::flash('success','Serviço excluido.');

        return redirect()->route('serv3');
    }

    public function store(Request $request){

        $serv1desc = DB::table('serv1')->where('codigo',"=",$request->codserv1)->get()->first();

        $serv2 = DB::table('subserv')->where('codserv2',"=",$request->codserv2)->get()->first();


        $codserv1 = $request->codserv1;
        $descserv1 = $serv1desc->descricao;
        $codserv2 = $serv2->codserv2;
        $descserv2 = $serv2->descserv2;
        $valorserv2 = $serv2->valorserv2;
        $codserv3 = $request->codigo;
        $descserv3 = $request->descricao;
        $valorserv3 = $request->valor;

        $servfornec = DB::insert('insert into subserv (codserv1,descserv1,codserv2,descserv2,valorserv2,codserv3,descserv3,valorserv3) values(?,?,?,?,?,?,?,?)',[$codserv1,$descserv1,$codserv2,$descserv2,$valorserv2,$codserv3,$descserv3,$valorserv3]);

        return redirect()->route('serv3');
    }

    public function update(Request $request, $id){


            $serv1desc = DB::table('serv1')->where('codigo',"=",$request->codserv1)->get()->first();
            $serv2desc = DB::table('subserv')->where('codserv2',"=",$request->codserv2)->get()->first();
            $descserv1 = $serv1desc->descricao;
            $codserv1 = $request->codserv1;
            $codserv2 = $request->codserv2;
            $descserv2 = $serv2desc->descserv2;
            $valorserv2 = $serv2desc->valorserv2;
            $codserv3 = $request->codigo;
            $valorserv3 = $request->valor;
            $descserv3 = $request->descricao;


            $serv2update = DB::table('subserv')->where('codserv3',$id)->update(['codserv1'=>$codserv1,'descserv1'=>$descserv1,'codserv2'=>$codserv2,'descserv2'=>$descserv2,'valorserv2'=>$valorserv2,'codserv3'=>$codserv3,'descserv3'=>$descserv3,'valorserv3'=>$valorserv3]);

            Session::flash('success','Serviço editado com sucesso!');

           return redirect()->route('serv3');
    }

}
