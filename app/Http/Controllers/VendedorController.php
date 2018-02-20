<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Vendedores;
use Session;


use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vendedores = DB::table('vendedores')->get();

        return view('vendedor')->with('vendedores',$vendedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vendedorcreate');
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
        $vendedor = Vendedores::create([

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
            'comissao' => $request->comissao,
            'titular' => $request->titular,
            'tipo' => $request->tipo,
            'cpfconta' => $request->cpfconta

        ]);

        return redirect()->route('vendedores');
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
        $vendedoredit = Vendedores::where('id','=',$id)->first();

        return view('vendedoredit')->with('vendedor',$vendedoredit);
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
        $vendedoredit = Vendedores::where('id','=',$id)->first();

            $vendedoredit->nome = $request->nome;
            $vendedoredit->cnpj = $request->cnpj;
            $vendedoredit->rg = $request->rg;
            $vendedoredit->email = $request->email;
            $vendedoredit->endereco = $request->endereco;
            $vendedoredit->numero = $request->numero;
            $vendedoredit->cep = $request->cep;
            $vendedoredit->complemento = $request->complemento;
            $vendedoredit->bairro = $request->bairro;
            $vendedoredit->cidade = $request->cidade;
            $vendedoredit->uf = $request->uf;
            $vendedoredit->fone1 = $request->fone1;
            $vendedoredit->fone2 = $request->fone2;
            $vendedoredit->celular = $request->celular;
            $vendedoredit->fantasia = $request->fantasia;
            $vendedoredit->site = $request->site;
            $vendedoredit->banco = $request->banco;
            $vendedoredit->agencia = $request->agencia;
            $vendedoredit->conta = $request->conta;
            $vendedoredit->site = $request->site;
            $vendedoredit->observacao = $request->observacao;
            $vendedoredit->titular = $request->titular;
            $vendedoredit->cpfconta = $request->cpfconta;

            $vendedoredit->save();

            Session::flash('success','Vendedor alterado com sucesso!');

           return redirect()->route('vendedores');
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
        $vendedordelete = Vendedores::where('id','=',$id)->first();

        $vendedordelete->delete();

        Session::flash('success','Vendedor excluido com sucesso!');

        return redirect()->route('vendedores');
    }

    public function searchMatch(Request $request){
       $query = $_GET['query'];

       $searchString = '%'.$query.'%';
       $vendedorsearch = DB::table('vendedores')->whereRaw("MATCH (nome,cnpj,fantasia) AGAINST ('$searchString' IN BOOLEAN MODE)")->get();

      return view('vendedor')->with('vendedores',$vendedorsearch);


}

public function search(Request $request){
       $query = $_GET['codigo'];

       $vendedorsearch = DB::table('vendedores')->where('id','=',$query)->get();

      return view('vendedor')->with('vendedores',$vendedorsearch);


}
}
