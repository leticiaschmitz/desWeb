<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdensController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function lista() {
        $ordens = DB::select("select * from ordens");
        return view("ordens.listagem")->withOrdens($ordens);
    }

    public function formulario() {
        return view("ordens.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $IDCliente = $request->input("IDCliente");
        DB::table('ordens')
        ->insert(
            ['IDOrdem'=>$IDOrdem,
            'IDCliente'=>'abf',
            'IDFuncionario'=>'123',
            'DataOrdem'=>'10'
            'DataRequisicao'=>'2',
            'DataEntrega'=>'123',
            'EnviadoPor'=>'10'
            'Frete'=>'10'
            'NomeDestinatario'=>'2',
            'EnderecoDestinatarioFrete'=>'10'
            'CidadeDestinatario'=>'10'
            'RegiaoDestinatario'=>'10'
            'CepDestinatario'=>'10'
            'PaisDestinatario'=>'2']
        );
        return redirect('/ordens');
    }

    public function deletar(Request $request, $IDCliente) {
        DB::table('ordens')->where('IDCliente', '=', $IDCliente)->delete();
        return redirect('/ordens');
    }

    public function formularioAlterar(Request $request, $IDOrdens) {
        $ordens = DB::table('ordens')
                        ->where('IDOrdens', '=', $IDOrdens)
                        ->get();
                        //dd($ordens[0]);
        return view("ordens.alterar")->withOrdens($ordens[0]);
    }

    public function alterar(Request $request, $IDOrdens) {
        //dd($request->all());
        $IDCliente = $request->input("IDCliente");
        DB::table('ordens')
            ->where('IDOrdens', '=', $IDOrdens)
            ->update(['IDCliente' => $IDCliente]);
        
        return redirect('/ordens');
    }
}
