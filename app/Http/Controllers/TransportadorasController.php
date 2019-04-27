<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransportadorasController extends Controller
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
        $transportadoras = DB::select("select * from transportadoras");
        return view("transportadoras.listagem")->withTransportadoras($transportadoras);
    }

    public function formulario() {
        return view("transportadoras.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $NomeCompanhia = $request->input("NomeCompanhia");
        DB::table('transportadoras')
        ->insert(
            ['IDTransportadora'=>$IDTransportadora,
            'NomeCompanhia'=>'abf',
            'Telefone'=>'123']
        );
        return redirect('/transportaadoras');
    }

    public function deletar(Request $request, $IDTransportadora) {
        DB::table('transportadoras')->where('IDTransportadora', '=', $IDTransportadora)->delete();
        return redirect('/transportadoras');
    }

    public function formularioAlterar(Request $request, $IDTransportadoras) {
        $transportadoras = DB::table('transportadoras')
                        ->where('IDTransportadoras', '=', $IDTransportadoras)
                        ->get();
                        //dd($transportadoras[0]);
        return view("transportadoras.alterar")->withTransportadoras($transportadoras[0]);
    }

    public function alterar(Request $request, $IDTransportadora) {
        //dd($request->all());
        $NomeCompanhia = $request->input("NomeCompanhia");
        DB::table('transportadoras')
            ->where('IDTransportadora', '=', $IDTransportadora)
            ->update(['NomeCompanhia' => $NomeCompanhia]);
        
        return redirect('/transportadoras');
    }
}

