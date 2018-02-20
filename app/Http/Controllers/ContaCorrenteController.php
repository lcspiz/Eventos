<?php
namespace App\Http\Controllers;

use App\ContaCorrente;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class ContaCorrenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contas = DB::table('contas_empresa')->get();

        return view ('contas')->with('contas',$contas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('contacreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      
        $conta = ContaCorrente::create([

            'banco' => $request->banco,
            'nome' => $request->nome,
            'agencia'=> $request->agencia,
            'dgt_agencia' =>$request->dgtagencia,
            'conta' => $request->conta,
            'dgt_conta' => $request->dgtConta,
            'ativa' => $request->ativa,
            'titular' => $request->titular,
            'apelido' => $request->apelido,
            'conta_padrao' => $request->contapadrao
        ]);


        return redirect()->route('conta_corrente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContaCorrente  $contaCorrente
     * @return \Illuminate\Http\Response
     */
    public function show(ContaCorrente $contaCorrente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContaCorrente  $contaCorrente
     * @return \Illuminate\Http\Response
     */
    public function edit($contaCorrente)
    {
        //
        $contaedit =  ContaCorrente::where('codbanco','=',$contaCorrente)->first();

        return view('contaedit')->with('conta',$contaedit);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContaCorrente  $contaCorrente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $contaCorrente)
    {
        //

        $contaedit = ContaCorrente::where('codbanco','=',$contaCorrente)->first();

        $contaedit->banco = $request->banco;
        $contaedit->nome = $request->nome;
        $contaedit->agencia = $request->agencia;
        $contaedit->dgt_agencia = $request->dgtagencia;
        $contaedit->conta = $request->conta;
        $contaedit->dgt_conta = $request->dgtConta;
        $contaedit->ativa = $request->ativa;
        $contaedit->titular = $request->titular;
        $contaedit->apelido = $request->apelido;
        $contaedit->conta_padrao = $request->contapadrao;

        $contaedit->save();

        Session::flash('success','Conta alterada com sucesso!');

        return redirect()->route('conta_corrente');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContaCorrente  $contaCorrente
     * @return \Illuminate\Http\Response
     */
    public function destroy($contaCorrente)
    {
        //
        $contadelete = ContaCorrente::where('codbanco','=',$contaCorrente)->first();

        $contadelete->delete();

        Session::flash('success','Conta excluida com sucesso!');

        return redirect()->route('conta_corrente');
    }
}
