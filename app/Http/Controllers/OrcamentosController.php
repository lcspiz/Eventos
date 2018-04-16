<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Orcamentos;
use App\Grupos;
use App\OrcamentosValores;
use Response;
use Alert;

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
        $orcamentodelete = Orcamentos::where('id','=',$id)->first();
        $orcamentodelete->delete();

        alert()->success('Orçamento excluido!', 'Sucesso!');

        return redirect()->route('orcamentos');

    }

    public function update(Request $request, $id){
        $orcamentoedit = Orcamentos::where('id','=',$id)->first();

            $orcamentoedit->orcamento = $request->orcamento;
            $orcamentoedit->cliente = $request->id_cliente;
            $orcamentoedit->apresentacao = $request->apresentacao;
            $orcamentoedit->hrapresentacao = $request->hrapresentacao;
            $orcamentoedit->dt_final = $request->dtfinal;
            $orcamentoedit->meio = $request->meio;
            $orcamentoedit->especie = $request->especie;
            $orcamentoedit->produto = $request->produto;
            $orcamentoedit->titulo = $request->titulo;
            $orcamentoedit->formato = $request->formato;
            $orcamentoedit->validade = $request->validade;
            $orcamentoedit->campanha = $request->campanha;
            $orcamentoedit->descricao = $request->observacao;
            $orcamentoedit->dt_inicio = $request->dtinicio;
            $orcamentoedit->responsavel = $request->responsavel;
            $orcamentoedit->prz_entrega = $request->prz_entrega;
            $orcamentoedit->hrentrega = $request->hrentrega;
            $orcamentoedit->praca = $request->praca;
            $orcamentoedit->hr_inicio = $request->hr_inicio;
            $orcamentoedit->hr_final = $request->hr_final;

            $orcamentoedit->save();

            alert()->success('Orçamento atualizado!', 'Sucesso!')->autoclose(2500);

            return redirect()->route('orcamentos');


    }

    public function salvaItem(Request $request){

        $orcamentoitem = OrcamentosValores::updateOrCreate(['descitem'=>$request->descitem],[
            'id_orcamento' => $request->id_orcamento,
            'grupo' => $request->codgrupo,
            'subgrupo' => $request->codsubgrupo,
            'item' => $request->item,
            'descitem' => $request->descitem,
            'qtde' => $request->qtde,
            'dias' => $request->dias,
            'custoun' => $request->custoun,
            'custotot' => $request->custotot,
            'valorun' => $request->valorun,
            'valortot' => $request->valortot,
            'rentabilidade' => $request->rentabilidade,
            'porcent' => $request->porcent,
            'obsitem' => $request->obsitem
        ]);

    }

    public function getItems(){
        $items = OrcamentosValores::where('id_orcamento',"=",request()->id)->get();

        return Response::json($items);
    }

    public function editItem($id){

        $item = OrcamentosValores::where('id',"=",$id)->first();

        return Response::json($item);

    }

    public function deleteItem($id){

        $item = OrcamentosValores::where('id',"=",$id)->first();

        $item->delete();

        return Response::json($item);

    }


}
