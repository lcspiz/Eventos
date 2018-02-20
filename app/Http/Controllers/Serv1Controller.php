<?php

namespace App\Http\Controllers;

use App\Serv1;
use App\Serv2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class Serv1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $serv1 = DB::table('serv1')->orderBy('codigo')->get();
        return view('serv1')->with('serv1',$serv1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('serv1create');
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
         $conta = Serv1::create([

            'codigo' => $request->codigo,
            'descricao' => $request->descricao,

        ]);

         return redirect()->route('serv1');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serv1  $serv1
     * @return \Illuminate\Http\Response
     */
    public function show(Serv1 $serv1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serv1  $serv1
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $serv1edit = Serv1::where('codigo','=',$id)->first();

        return view('serv1edit')->with('serv1',$serv1edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serv1  $serv1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  

            $serv1edit = Serv1::where('codigo','=',$id)->first();

            $serv1edit->codigo = $request->codigo;
            $serv1edit->descricao = $request->descricao;

            $serv1edit->save();


           return redirect()->route('serv1');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serv1  $serv1
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $serv1delete = Serv1::where('codigo','=',$id)->first();

        $checkserv2 = Serv2::where('codserv1','=',$id)->first();
        
        if($checkserv2){
            Session::flash('error','Serviço de nível 2 detectado!');
            return redirect()->route('serv1');
        }
        else{
            $serv1delete->delete();
            return redirect()->route('serv1');
        }
    }
}
