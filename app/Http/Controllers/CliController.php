<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Clientes;
use App\ContatosClientes;
use Illuminate\Support\Facades\Input;
use Session;

class CliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = DB::table('clientes')->get();

        return view('cliente')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('clientecreate');
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
        $cliente = Clientes::create([

            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'rg' => $request->rg,
            'email' => $request->email,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'cep' => $request->cep,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->uf,
            'fone1' => $request->fone1,
            'fone2' => $request->fone2,
            'celular' => $request->celular,
            'fantasia' => $request->fantasia,
            'site' => $request->site,
            'banco' => $request->banco,
            'agencia' => $request->agencia,
            'conta' => $request->conta,
            'site' => $request->site,
            'observacao' => $request->observacao,
            'titular' => $request->titular,
            'tipo' => $request->tipo,
            'cpfconta' => $request->cpfconta

        ]);

        Session::flash('success','Cliente incluido com sucesso!');

        return redirect()->route('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $clienteedit =  Clientes::where('id','=',$id)->first();
        $contatos =  ContatosClientes::where('id_cliente',"=",$id)->get();

        return view('clienteedit')->with('cliente',$clienteedit)->with('contatos', $contatos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $clienteedit = Clientes::where('id','=',$id)->first();

            $clienteedit->nome = $request->nome;
            $clienteedit->cnpj = $request->cnpj;
            $clienteedit->rg = $request->rg;
            $clienteedit->email = $request->email;
            $clienteedit->endereco = $request->endereco;
            $clienteedit->numero = $request->numero;
            $clienteedit->cep = $request->cep;
            $clienteedit->complemento = $request->complemento;
            $clienteedit->bairro = $request->bairro;
            $clienteedit->cidade = $request->cidade;
            $clienteedit->uf = $request->uf;
            $clienteedit->fone1 = $request->fone1;
            $clienteedit->fone2 = $request->fone2;
            $clienteedit->celular = $request->celular;
            $clienteedit->fantasia = $request->fantasia;
            $clienteedit->site = $request->site;
            $clienteedit->banco = $request->banco;
            $clienteedit->agencia = $request->agencia;
            $clienteedit->conta = $request->conta;
            $clienteedit->site = $request->site;
            $clienteedit->observacao = $request->observacao;
            $clienteedit->titular = $request->titular;
            $clienteedit->tipo = $request->tipo;
            $clienteedit->cpfconta = $request->cpfconta;

            $clienteedit->save();

            Session::flash('success','Cliente alterado com sucesso!');

           return redirect()->route('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $clientedelete = Clientes::where('id','=',$id)->first();

        $clientedelete->delete();

        Session::flash('success','Cliente excluido com sucesso!');

        return redirect()->route('clientes');
    }

    public function searchMatch(Request $request){
       $query = $_GET['query'];

       $searchString = '%'.$query.'%';
       $clientesearch = DB::table('clientes')->whereRaw("MATCH (nome,cnpj,fantasia) AGAINST ('$searchString' IN BOOLEAN MODE)")->get();

      return view('cliente')->with('clientes',$clientesearch);


}

public function search(Request $request){
       $query = $_GET['codigo'];

       $clientesearch = DB::table('clientes')->where('id','=',$query)->get();

      return view('cliente')->with('clientes',$clientesearch);


}
}
