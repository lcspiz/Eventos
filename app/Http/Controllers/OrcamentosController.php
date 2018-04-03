<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Orcamentos;
use App\Grupos;

class OrcamentosController extends Controller
{
    //
    public function index(){
        $orcamentos = DB::table('orcamentos')->orderBy('id')->get();
    	return view('orcamentos')->with('orcamentos',$orcamentos);
    }

    public function create(){

    	 return view('orcamentoscreate');
    }

    public function store(Request $request){
        $ultorcamento = Orcamentos::max('orcamento');
        $ultorcamento += 1;

        $orcamento = Orcamentos::create([
            'orcamento' => $ultorcamento,
            'cliente' => $request->id_cliente,
            'apresentacao' => $request->apresentacao,
            'hrapresentacao' => $request->hrapresentacao,
            'dt_final' => $request->dtfinal,
            'meio' => $request->meio,
            'especie' => $request->especie,
            'produto' => $request->produto,
            'titulo' => $request->titulo,
            'formato' => $request->formato,
            'validade' => $request->validade,
            'campanha' => $request->campanha,
            'descricao' => $request->observacao,
            'dt_inicio' => $request->dtinicio,
            'responsavel' => $request->responsavel,
            'prz_entrega' => $request->prz_entrega,
            'hrentrega' => $request->hrentrega,
            'praca' => $request->praca,
            'hr_inicio' => $request->hr_inicio,
            'hr_final' => $request->hr_final
        ]);

        $neworcamento = Orcamentos::orderBy('id','desc')->first();

       return redirect()->route('orcamentos.edit',['id'=> $neworcamento->id]);



    }

    public function edit($id){
        $grupos = DB::table('grupos')->orderBy('id')->get();

        $orcamentoedit = Orcamentos::where('id','=',$id)->first();
        return view('orcamentosedit')->with('orcamento',$orcamentoedit)->with('grupos',$grupos);
    }

    public function delete(){


    }

    public function salvaItem(Request $request){
    	return $request;
    }


}
