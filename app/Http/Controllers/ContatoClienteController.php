<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContatosClientes;
use App\Clientes;
use Session;

class ContatoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        
        return view('contatocliente_create')->with('id_cliente',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //

     $contatocreate = ContatosClientes::create([
            'id_cliente' => $id,
            'nome' => $request->nome,
            'cargo' => $request->cargo,
            'fone' => $request->fone,
            'email' => $request->email,
            'observacao' => $request->observacao,
        ]);
        Session::flash('success','Contato incluido com sucesso!');

        return redirect()->action("CliController@edit",['id'=>$id]);
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
    public function edit($id_cliente,$id_contato)
    {
        //
        $cliente = Clientes::where('id','=',$id_cliente)->first();    

        $contato =  ContatosClientes::where('id','=',$id_contato)->first();
        
        return view('contatocliente_edit')->with('contato',$contato)->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cliente,$id_contato)
    {
        //
           $contatoedit = ContatosClientes::where('id','=',$id_contato)->first();

            $contatoedit->id_cliente = $id_cliente;
            $contatoedit->nome = $request->nome;
            $contatoedit->cargo = $request->cargo;
            $contatoedit->fone = $request->fone;
            $contatoedit->email = $request->email;
            $contatoedit->observacao = $request->observacao;

            $contatoedit->save();

        Session::flash('success','Contato atualizado com sucesso!');
        return redirect()->action("CliController@edit",['id'=>$id_cliente]);
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
        $contatodelete = ContatosClientes::where('id','=',$id)->first();

        $contatodelete->delete();

        Session::flash('success','Contato excluido com sucesso!');

        return redirect()->back();
    }
}
