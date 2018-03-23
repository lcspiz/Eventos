<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Serv2;
use App\Serv1;
use App\SubServ;
use Session;

class Serv2Controller extends Controller
{
    //
   public function index()
    {
        //
    $serv2 = DB::table('subserv')->whereNull('codserv3')->orderBy('codserv1','ASC')->orderBy('codserv2','ASC')->get();

    return view('serv2')->with('serv2',$serv2);
        
    }

    public function create(){


    	 $serv1 = DB::table('serv1')->orderBy('codigo')->get();

    	 return view('serv2create')->with('servicos1',$serv1);
    }

    public function store(Request $request){

    	$serv1desc = DB::table('serv1')->where('codigo',"=",$request->codserv1)->get()->first();

        $codserv1 = $request->codserv1;
        $descserv1 = $serv1desc->descricao;
        $codserv2 = $request->codigo;
        $descserv2 = $request->descricao;
        $valorserv2 = $request->valor;

        $servfornec = DB::insert('insert into subserv (codserv1,descserv1,codserv2,descserv2,valorserv2) values(?,?,?,?,?)',[$codserv1,$descserv1,$codserv2,$descserv2,$valorserv2]);

        return redirect()->route('serv2');
    }

    public function edit($id){

    	
    	$serv1 = DB::table('serv1')->orderBy('codigo')->get();

    	$serv2 = DB::table('subserv')->where('codserv2',"=",$id)->first();

        return view('serv2edit')->with('serv2',$serv2)->with('servicos1',$serv1);
    }

    public function update(Request $request, $id){

            $serv1desc = DB::table('serv1')->where('codigo',"=",$request->codserv1)->get()->first();

            $descserv1 = $serv1desc->descricao;
            $codserv1 = $request->codserv1;
            $codserv2 = $request->codigo;
            $descserv2 = $request->descricao;
            $valorserv2 = $request->valor;

            $serv2update = DB::table('subserv')->where('codserv2',$id)->update(['codserv1'=>$codserv1,'descserv1'=>$descserv1,'codserv2'=>$codserv2,'descserv2'=>$descserv2,'valorserv2'=>$valorserv2]);

            Session::flash('success','Serviço editado com sucesso!');


           return redirect()->route('serv2');
    }

    public function delete($id){


        $serv2 = DB::table('subserv')->where('codserv2',$id)->delete();

        Session::flash('success','Serviço excluido.');

        return redirect()->route('serv2');
    }
}
