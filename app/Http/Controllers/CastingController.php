<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Casting;
use App\CastingValores;
use Session;
use Illuminate\Support\Facades\Input;


class CastingController extends Controller
{
    //
     public function index()
    {
        //

        $castings = DB::table('casting')->orderBy('id')->get();

        return view('casting')->with('castings',$castings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('castingcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $casting = Casting::create([

            'nome' => $request->nome,
            'snome' => $request->snome,
            'nascimento' => $request->nascimento,
            'ativo' => $request->ativo,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'email' => $request->email,
            'email2' => $request->email2,
            'classificacao' => $request->classificacao,
            'estado_civil' => $request->estado_civil,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'cep' => $request->cep,
            'complemento' => $request->complemento,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'uf' => $request->uf,
            'foneres' => $request->foneres,
            'fone1' => $request->fone1,
            'fone2' => $request->fone2,
            'sexo' => $request->sexo,
            'banco' => $request->banco,
            'agencia' => $request->agencia,
            'conta' => $request->conta,
            'social' => $request->social,
            'titular' => $request->titular,
            'tipo' => $request->tipo,
            'cpfconta' => $request->cpfconta,
            'contato' => $request->contato,
            'apelido' => $request->apelido

        ]);


        $castingvar = DB::table('casting_variaveis')->get();
        $castinglast = DB::table('casting')->orderBy('created_at','desc')->first();


        foreach ($castingvar as $castingv) {
            CastingValores::create([
                'codigo_casting' => $castinglast->id,
                'codigo_tipo' => $castingv->codigo_tipo,
                'codigo_variaveis' => $castingv->codigo,
                'descricao' => $castingv->descricao,
                'valores' => null
            ]);
        }

        Session::flash('success','Casting incluido com sucesso!');
        return redirect()->route('castings');
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
        $castingedit = DB::table('casting')->where('id',"=" ,$id)->first();
        $casting1 = DB::table('casting_valores')->where('codigo_tipo','=','001')->where('codigo_casting',$id)->get();
        $casting2 = DB::table('casting_valores')->where('codigo_tipo','=','002')->where('codigo_casting',$id)->get();  
        $casting3 = DB::table('casting_valores')->where('codigo_tipo','=','003')->where('codigo_casting',$id)->get();  
        $casting4 = DB::table('casting_valores')->where('codigo_tipo','=','004')->where('codigo_casting',$id)->get();   
        $casting5 = DB::table('casting_valores')->where('codigo_tipo','=','005')->where('codigo_casting',$id)->get(); 
        $casting6 = DB::table('casting_valores')->where('codigo_tipo','=','006')->where('codigo_casting',$id)->get(); 


        return view('castingedit')->with('castings',$castingedit)->with('castings1',$casting1)->with('castings2',$casting2)->with('castings3',$casting3)->with('castings4',$casting4)->with('castings5',$casting5)->with('castings6',$casting6);
        
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
            $castingedit = Casting::where('id','=',$id)->first();

            $castingedit->nome = $request->nome;
            $castingedit->snome = $request->snome;
            $castingedit->nascimento = $request->nascimento;
            $castingedit->ativo = $request->ativo;
            $castingedit->cpf = $request->cpf;
            $castingedit->rg = $request->rg;
            $castingedit->email = $request->email;
            $castingedit->email2 = $request->email2;
            $castingedit->classificacao = $request->classificacao;
            $castingedit->estado_civil = $request->estado_civil;
            $castingedit->endereco = $request->endereco;
            $castingedit->numero = $request->numero;
            $castingedit->cep = $request->cep;
            $castingedit->complemento = $request->complemento;
            $castingedit->bairro = $request->bairro;
            $castingedit->cidade = $request->cidade;
            $castingedit->uf = $request->uf;
            $castingedit->foneres = $request->foneres;
            $castingedit->fone1 = $request->fone1;
            $castingedit->fone2 = $request->fone2;
            $castingedit->sexo = $request->sexo;
            $castingedit->banco = $request->banco;
            $castingedit->agencia = $request->agencia;
            $castingedit->conta = $request->conta;
            $castingedit->titular = $request->titular;
            $castingedit->tipo = $request->tipo;
            $castingedit->cpfconta = $request->cpfconta;
            $castingedit->contato = $request->contato;
            $castingedit->apelido = $request->apelido;
            $castingedit->social = $request->social;

            $castingedit->save();

            Session::flash('success','Casting alterado com sucesso!');

           return redirect()->route('castings');

    }

//Atualiza os valores de casting baseado no id da variavel
    public function updatevalor(Request $request,$id){

        $castingedit = CastingValores::where('codigo_casting','=',$id)->get();

        foreach ($castingedit as $casting) {

           $descricao = $casting->descricao;

           $codigo_tipo = $casting->codigo_tipo;

           $valor = $request->{$descricao};

             DB::update(DB::raw("UPDATE casting_valores SET valores = '$valor' WHERE codigo_casting = $id 
            AND codigo_variaveis = $casting->codigo_variaveis and codigo_tipo = $codigo_tipo; "));

        }


              return redirect()->action("CastingController@edit",['id'=>$id]);
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
        $castingdelete = Casting::where('id','=',$id)->first();

        $castingdelete->delete();

        Session::flash('success','Casting excluido com sucesso!');

        return redirect()->route('castings');
    }

//Pesquisa feita por MATCH AGAINST
    public function searchMatch(Request $request){
       $query = $_GET['query'];

       $searchString = '%'.$query.'%';
       $castingsearch = DB::table('casting')->whereRaw("MATCH (nome,cpf) AGAINST ('$searchString' IN BOOLEAN MODE)")->get();

      return view('casting')->with('castings',$castingsearch);


}
//Pesquisa feita por eloquent
public function search(Request $request){
       $query = $_GET['codigo'];

       $castingsearch = DB::table('casting')->where('id','=',$query)->get();

      return view('casting')->with('castings',$castingsearch);


}

public function selecionacasting(){
    $area = DB::table('casting_variaveis')->where('codigo_tipo',"=","004")->orderBy('descricao')->get();

    $uf = DB::table('casting')->orderBy('uf')->get()->unique('uf');
    $cidades = DB::table('casting')->orderBy('cidade')->get()->unique('cidade');

    $casting = [];

    return view('selecionacasting',['castings' => $casting, 'areas' => $area, 'ufs' => $uf, 'cidades' => $cidades]);
}

public function pesquisacasting(Request $request){

    $area = DB::table('casting_variaveis')->where('codigo_tipo',"=","004")->orderBy('descricao')->get();

    $uf = DB::table('casting')->orderBy('uf')->get()->unique('uf');
    $cidades = DB::table('casting')->orderBy('cidade')->get()->unique('cidade');

        $castingarea = $request->area;
        $castingcidade = $request->cidade;
        $castinguf = $request->uf;

        $castingsearch = collect(DB::select(DB::raw("SELECT casting.id, casting.nome , casting.uf, casting.cidade from casting inner join casting_valores on casting.id = casting_valores.codigo_casting WHERE codigo_tipo = '004' and descricao = '$castingarea' and valores = 'Sim' and casting.cidade LIKE '%$castingcidade%' and casting.uf LIKE '%$castinguf%' ORDER BY casting.id ")));

        return view('selecionacasting',['castings' => $castingsearch, 'areas' => $area, 'ufs' => $uf, 'cidades' => $cidades]);
    
}



}



