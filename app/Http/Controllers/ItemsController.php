<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ItemsController extends Controller
{
    //
   public function index()
    {
        //
    $grupo = 'subgrupos.id_grupo';

    $items = collect(DB::select(DB::raw("SELECT `items`.*, `grupos`.`descricao` as `descgrupo`, `subgrupos`.`descricao` as `descsubgrupo`, `items`.`descricao` from `items` inner join `grupos` on `items`.`grupo` = `grupos`.`codigo` inner join `subgrupos` on `items`.`subgrupo` = `subgrupos`.`id_subgrupo` where `items`.`grupo` = `subgrupos`.`id_grupo` order by `grupo` asc, `subgrupo` asc, `item` asc ")));


  return view('items')->with('items',$items);
        
    }

    public function create(){


    	 $grupos = DB::table('grupos')->orderBy('codigo')->get();

    	 return view('itemscreate')->with('grupos',$grupos);
    }

    public function store(Request $request){

        $codgrupo = $request->codgrupo;
        $subgrupo = $request->codsubgrupo;
        $item = $request->codigo;
        $desc = $request->descricao;
        $valor = $request->valor;

        $servfornec = DB::insert('insert into items (grupo,subgrupo,item,descricao,valor) values(?,?,?,?,?)',[$codgrupo,$subgrupo,$item,$desc,$valor]);

        return redirect()->route('items');
    }

    public function edit($id){
    	
    	$grupos = DB::table('grupos')->orderBy('id')->get();

    	$item = DB::table('items')->where('id',"=",$id)->first();


        return view('itemsedit')->with('grupos',$grupos)->with('item',$item);
    }

    public function update(Request $request, $id){

            $grupo = $request->codgrupo;
            $subgrupo = $request->codsubgrupo;
            $item = $request->codigo;
            $desc = $request->descricao;
            $valor = $request->valor;

            $subgupdate = DB::table('items')->where('id',$id)->update(['grupo'=>$grupo,'subgrupo'=>$subgrupo,'item'=>$item,'descricao'=>$desc,'valor'=>$valor]);

            Session::flash('success','Item editado com sucesso!');


           return redirect()->route('items');
    }

    public function delete($id){


        $serv2 = DB::table('items')->where('id',$id)->delete();

        Session::flash('success','Item excluido.');

        return redirect()->route('items');
    }

    public function getItem($grupo,$subgrupo){

        $subgrupos = DB::table("items")->where("grupo",$grupo)->where("subgrupo",$subgrupo)->orderBy('item')->pluck("item","descricao");

        return json_encode($subgrupos);
    }

    public function getValor($grupo,$subgrupo,$item){

        $subgrupos = DB::table("items")->where("grupo",$grupo)->where("subgrupo",$subgrupo)->where("item",$item)->orderBy('item')->pluck("valor");

        return json_encode($subgrupos);
    }


}
