<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContatosFornec;
use Session;

class ContatofornecController extends Controller
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
        
        return view('contatofornec_create')->with('id_fornec',$id);
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

     $contatocreate = ContatosFornec::create([
            'id_fornec' => $id,
            'nome' => $request->nome,
            'cargo' => $request->cargo,
            'fone' => $request->fone,
            'email' => $request->email,
            'observacao' => $request->observacao,
        ]);
        Session::flash('success','Contato incluido com sucesso!');

        return redirect()->action("FornecController@edit",['id'=>$id]);
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
    public function edit($id_fornec,$id_contato)
    {
        //
        $contato =  ContatosFornec::where('id','=',$id_contato)->first();
        
        return view('contatofornec_edit')->with('contato',$contato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_fornec,$id_contato)
    {
        //
           $contatoedit = ContatosFornec::where('id','=',$id_contato)->first();

            $contatoedit->id_fornec = $id_fornec;
            $contatoedit->nome = $request->nome;
            $contatoedit->cargo = $request->cargo;
            $contatoedit->fone = $request->fone;
            $contatoedit->email = $request->email;
            $contatoedit->observacao = $request->observacao;

            $contatoedit->save();

        Session::flash('success','Contato atualizado com sucesso!');
        return redirect()->action("FornecController@edit",['id'=>$id_fornec]);
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
        $contatodelete = ContatosFornec::where('id','=',$id)->first();

        $contatodelete->delete();

        Session::flash('success','Contato excluido com sucesso!');

        return redirect()->back();
    }
}
