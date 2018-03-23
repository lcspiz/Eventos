<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Grupos;

class GruposController extends Controller
{
    //

    public function index()
    {
        //
    	$grupos = DB::table('grupos')->orderBy('id')->get();
        return view('grupos')->with('grupos',$grupos);
    }

    public function create(){
    	return view('gruposcreate');
    }

        public function store(Request $request)
    {
        //
         $conta = Grupos::create([

            'id' => $request->codigo,
            'descricao' => $request->descricao,

        ]);

         return redirect()->route('grupos');
    }


        public function delete($id)
    {
        //
        $gruposdelete = Grupos::where('id','=',$id)->first();     

        $gruposdelete->delete();
        return redirect()->route('grupos');

    }

    public function edit($id)
    {
        //
        $grupoedit = Grupos::where('id','=',$id)->first();

        return view('gruposedit')->with('grupo',$grupoedit);
    }

     public function update(Request $request, $id)
    {
        //  

            $grupoedit = Grupos::where('id','=',$id)->first();

            $grupoedit->id = $request->codigo;
            $grupoedit->descricao = $request->descricao;

            $grupoedit->save();


           return redirect()->route('grupos');

    }

}
