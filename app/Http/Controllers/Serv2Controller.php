<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Serv2;
use App\Serv1;
use Session;

class Serv2Controller extends Controller
{
    //
   public function index()
    {
        //
    $serv2 = DB::table('serv2')->orderBy('codserv1','ASC')->orderBy('codigo','ASC')->simplePaginate(3);

    return view('serv2')->with('serv2',$serv2);
        
    }

    public function create(){


    	 $serv1 = DB::table('serv1')->orderBy('codigo')->get();

    	 return view('serv2create')->with('servicos1',$serv1);
    }

    public function store(Request $request){

    	$serv1desc = DB::table('serv1')->where('codigo',"=",$request->codserv1)->get()->first();


    	$serv2 = Serv2::create([
    		'codserv1' => $request->codserv1,
    		'descserv1' => $serv1desc->descricao,
            'codigo' => $request->codigo,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
        ]);

        return redirect()->route('serv2');
    }

    public function edit($id){

    	
    	$serv1 = DB::table('serv1')->orderBy('codigo')->get();

    	$serv2edit = Serv2::where('codigo','=',$id)->first();

        return view('serv2edit')->with('serv2',$serv2edit)->with('servicos1',$serv1);
    }

    public function update(Request $request, $id){

            $serv2edit = Serv2::where('codigo','=',$id)->first();
            $serv1desc = DB::table('serv1')->where('codigo',"=",$request->codserv1)->get()->first();

            $serv2edit->descserv1 = $serv1desc->descricao;
            $serv2edit->codserv1 = $request->codserv1;
            $serv2edit->codigo = $request->codigo;
            $serv2edit->descricao = $request->descricao;

            $serv2edit->save();

            Session::flash('success','Serviço editado com sucesso!');


           return redirect()->route('serv2');
    }

    public function delete($id){

    	$serv1delete = Serv2::where('codigo','=',$id)->first();
        $serv1delete->delete();

        return redirect()->route('serv2');
    }
}
