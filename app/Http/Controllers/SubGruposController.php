<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class SubGruposController extends Controller
{
    //
    public function index()
    {
        //
    $subgrupos = DB::table('subgrupos')->orderBy('id_grupo','ASC')->orderBy('id','ASC')->get();

    return view('subgrupos')->with('subgrupos',$subgrupos);
        
    }

    public function create(){


    	 $grupos = DB::table('grupos')->orderBy('codigo')->get();

    	 return view('subgruposcreate')->with('grupos',$grupos);
    }

    public function store(Request $request){

        $codgrupo = $request->codgrupo;
        $subgrupo = $request->codigo;
        $desc = $request->descricao;
        $valor = $request->valor;

        $servfornec = DB::insert('insert into subgrupos (id_grupo,id_subgrupo,descricao,valor) values(?,?,?,?)',[$codgrupo,$subgrupo,$desc,$valor]);

        return redirect()->route('subgrupos');
    }

    public function edit($id){
    	
    	$grupos = DB::table('grupos')->orderBy('id')->get();

    	$subgrupo = DB::table('subgrupos')->where('id',"=",$id)->first();


        return view('subgruposedit')->with('grupos',$grupos)->with('subgrupo',$subgrupo);
    }

    public function update(Request $request, $id){

            $grupo = $request->codgrupo;
            $subgrupo = $request->codigo;
            $desc = $request->descricao;
            $valor = $request->valor;

            $subgupdate = DB::table('subgrupos')->where('id',$id)->update(['id_grupo'=>$grupo,'id_subgrupo'=>$subgrupo,'descricao'=>$desc,'valor'=>$valor]);

            Session::flash('success','Serviço editado com sucesso!');


           return redirect()->route('subgrupos');
    }

    public function delete($id){


        $serv2 = DB::table('subgrupos')->where('id',$id)->delete();

        Session::flash('success','Subgrupo excluido.');

        return redirect()->route('subgrupos');
    }
}
