<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Fornecedores;
use App\ContatosFornec;
use Session;
use Illuminate\Support\Facades\Input;

class FornecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fornecedores = DB::table('fornecedores')->orderBy('id')->get();

        return view('fornecedor')->with('fornecedores',$fornecedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('forneccreate');
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
        $cliente = Fornecedores::create([

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

        return redirect()->route('fornecedores');
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
        $servfornec = DB::table('serv_fornec')->where('codfornec',"=" ,$id)->orderBy('codserv1','ASC')->orderBy('codserv2','ASC')->orderBy('codserv3','ASC')->get();
        
        $fornecedit = Fornecedores::where('id','=',$id)->first();
        $contatos =  ContatosFornec::where('id_fornec',"=",$id)->get();

        return view('fornecedit')->with('fornecedor',$fornecedit)->with('contatos', $contatos)->with('servfornec',$servfornec);
        
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
            $fornecedit = Fornecedores::where('id','=',$id)->first();

            $fornecedit->nome = $request->nome;
            $fornecedit->cnpj = $request->cnpj;
            $fornecedit->rg = $request->rg;
            $fornecedit->email = $request->email;
            $fornecedit->endereco = $request->endereco;
            $fornecedit->numero = $request->numero;
            $fornecedit->cep = $request->cep;
            $fornecedit->complemento = $request->complemento;
            $fornecedit->bairro = $request->bairro;
            $fornecedit->cidade = $request->cidade;
            $fornecedit->uf = $request->uf;
            $fornecedit->fone1 = $request->fone1;
            $fornecedit->fone2 = $request->fone2;
            $fornecedit->celular = $request->celular;
            $fornecedit->fantasia = $request->fantasia;
            $fornecedit->site = $request->site;
            $fornecedit->banco = $request->banco;
            $fornecedit->agencia = $request->agencia;
            $fornecedit->conta = $request->conta;
            $fornecedit->site = $request->site;
            $fornecedit->observacao = $request->observacao;
            $fornecedit->titular = $request->titular;
            $fornecedit->tipo = $request->tipo;
            $fornecedit->cpfconta = $request->cpfconta;

            $fornecedit->save();

            Session::flash('success','Fornecedor alterado com sucesso!');

           return redirect()->route('fornecedores');
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
        $fornecdelete = Fornecedores::where('id','=',$id)->first();

        $fornecdelete->delete();

        Session::flash('success','Fornecedor excluido com sucesso!');

        return redirect()->route('fornecedores');
    }

 public function searchMatch(Request $request){
       $query = $_GET['query'];

       $searchString = '%'.$query.'%';
       $fornecsearch = DB::table('fornecedores')->whereRaw("MATCH (nome,cnpj,fantasia) AGAINST ('$searchString' IN BOOLEAN MODE)")->get();

      return view('fornecedor')->with('fornecedores',$fornecsearch);


}

public function search(Request $request){
       $query = $_GET['codigo'];

       $fornecsearch = DB::table('fornecedores')->where('id','=',$query)->get();

      return view('fornecedor')->with('fornecedores',$fornecsearch);


}

public function pesquisafornec(Request $request){

    $serv1 = DB::table('serv1')->orderBy('codigo')->get();
    $uf = DB::table('fornecedores')->orderBy('uf')->get()->unique('uf');
    $cidades = DB::table('fornecedores')->orderBy('cidade')->get()->unique('cidade');

    if($request->codserv3 == null){
        $codserv1 = $request->codserv1;
        $codserv2 = $request->codserv2;
        $codserv3 = $request->codserv3;
        $fornecidade = $request->cidade;
        $fornecuf = $request->uf;

        $fornecsearch = collect(DB::select(DB::raw("SELECT fornecedores.id, fornecedores.nome , fornecedores.uf, fornecedores.cidade, serv_fornec.codserv1, serv_fornec.codserv2, serv_fornec.codserv3 from fornecedores inner join serv_fornec on fornecedores.id = serv_fornec.codfornec WHERE codserv1 = $codserv1 and codserv2 = $codserv2 and codserv3 IS NULL and fornecedores.cidade LIKE '$fornecidade' and fornecedores.uf LIKE '$fornecuf' ")));

        return view('selecionafornec',['fornecedores' => $fornecsearch, 'servicos1' => $serv1,'servicos1' => $serv1, 'ufs' => $uf, 'cidades' => $cidades,'request' => $request]);
    }
    else{
        $codserv1 = $request->codserv1;
        $codserv2 = $request->codserv2;
        $codserv3 = $request->codserv3;
        $fornecidade = $request->cidade;
        $fornecuf = $request->uf;



        $fornecsearch = collect(DB::select(DB::raw("SELECT fornecedores.id, fornecedores.nome , fornecedores.uf, fornecedores.cidade, serv_fornec.codserv1, serv_fornec.codserv2, serv_fornec.codserv3 from fornecedores inner join serv_fornec on fornecedores.id = serv_fornec.codfornec WHERE codserv1 = $codserv1 and codserv2 = $codserv2 and codserv3 = $codserv3 and fornecedores.cidade LIKE '$fornecidade' and fornecedores.uf LIKE '$fornecuf' ")));

        return view('selecionafornec',['fornecedores' => $fornecsearch, 'servicos1' => $serv1,'servicos1' => $serv1, 'ufs' => $uf, 'cidades' => $cidades,'request' => $request]);

    }  
    
}

public function selecionafornec(){
    $serv1 = DB::table('serv1')->orderBy('codigo')->get();

    $uf = DB::table('fornecedores')->orderBy('uf')->get()->unique('uf');
    $cidades = DB::table('fornecedores')->orderBy('cidade')->get()->unique('cidade');

    $fornec = [];

    return view('selecionafornec',['fornecedores' => $fornec, 'servicos1' => $serv1, 'ufs' => $uf, 'cidades' => $cidades]);
}


}
