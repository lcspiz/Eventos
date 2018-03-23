<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Serv2;
use App\Serv1;
use App\Serv3;
use App\ServFornec;
use App\Fornecedores;

class ServFornecController extends Controller
{
    //
    public function index($id){

    	$servicos = DB::table('subserv')->orderBy('codserv1','ASC')->orderBy('codserv2','ASC')->get();

    	$fornec = Fornecedores::where('id','=',$id)->first();

    	return view('servfornec',compact('servicos','fornec'));
    }

    public function store3($idfornec,$id){

    	$servfornec = DB::table('serv_fornec')->whereRaw("codfornec = $idfornec AND codserv3 = $id ")->first();
    	if($servfornec){
    		Session::flash('error','Serviço já existente.');
    		return redirect()->action("ServFornecController@index",['id'=>$idfornec]);
    	}
    	else{

    	$serv3 = DB::table('subserv')->where('codserv3',"=",$id)->first();

    	$codserv1 = $serv3->codserv1;
    	$descserv1 = $serv3->descserv1;
    	$codserv2 = $serv3->codserv2;
    	$descserv2 = $serv3->descserv2;
    	$valorserv2 = $serv3->valorserv2;
    	$codserv3 = $serv3->codserv3;
    	$descserv3 = $serv3->descserv3;
    	$valorserv3 = $serv3->valorserv3;

       	$servfornec = DB::insert('insert into serv_fornec (codfornec,codserv1,descserv1,codserv2,descserv2,valorserv2,codserv3,descserv3,valorserv3) values(?,?,?,?,?,?,?,?,?)',[$idfornec,$codserv1,$descserv1,$codserv2,$descserv2,$valorserv2,$codserv3,$descserv3,$valorserv3]);

   		Session::flash('success','Serviço adicionado.');
   		return redirect()->action("ServFornecController@index",['id'=>$idfornec]);
    	}



    }

     public function store2($idfornec,$id){

        $servfornec = DB::table('serv_fornec')->whereRaw("codfornec = $idfornec AND codserv2 = $id AND codserv3 IS NULL ")->first();
        if($servfornec){
            Session::flash('error','Serviço já existente.');
            return redirect()->action("ServFornecController@index",['id'=>$idfornec]);
        }
        else{

        $serv2 = DB::table('subserv')->where('codserv2',"=",$id)->whereNull('codserv3')->first();

        $codserv1 = $serv2->codserv1;
        $descserv1 = $serv2->descserv1;
        $codserv2 = $serv2->codserv2;
        $descserv2 = $serv2->descserv2;
        $valorserv2 = $serv2->valorserv2;

        $servfornec = DB::insert('insert into serv_fornec (codfornec,codserv1,descserv1,codserv2,descserv2,valorserv2) values(?,?,?,?,?,?)',[$idfornec,$codserv1,$descserv1,$codserv2,$descserv2,$valorserv2]);

        Session::flash('success','Serviço adicionado.');
        return redirect()->action("ServFornecController@index",['id'=>$idfornec]);
        }



    }

    public function delete3($idfornec,$id){

    	$servfornec = DB::table('serv_fornec')->whereRaw("codfornec = $idfornec AND codserv3 = $id ")->delete();

    	Session::flash('success','Serviço excluido.');
    	return redirect()->action("FornecController@edit",['id'=>$idfornec]);
    }

    public function delete2($idfornec,$id){

        $servfornec = DB::table('serv_fornec')->whereRaw("codfornec = $idfornec AND codserv2 = $id AND codserv3 IS NULL ")->delete();

        Session::flash('success','Serviço excluido.');
        return redirect()->action("FornecController@edit",['id'=>$idfornec]);
    }

    public function searchMatch(Request $request,$id){
       $fornec = Fornecedores::where('id','=',$id)->first();
       $query = $_GET['query'];

       $searchString = '%'.$query.'%';
       $servsearch = DB::table('subserv')->whereRaw("MATCH (descserv1,descserv2,descserv3) AGAINST ('$searchString' IN BOOLEAN MODE)")->get();

      return view('servfornec')->with('servicos',$servsearch)->with('fornec',$fornec);


}

public function search(Request $request, $id){

       $query = $_GET['codigo'];
       
       $fornec = Fornecedores::where('id','=',$id)->first();

       $servsearch = DB::table('subserv')->where('codserv1','=',$query)->get();

      return view('servfornec')->with('servicos',$servsearch)->with('fornec',$fornec);


}

public function teste($id){
    echo "route OK";
}
}
