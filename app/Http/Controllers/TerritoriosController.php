<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
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
        $terriotiros = DB::select("select * from territorios");
        return view("territorios.listagem")->withTerritorios($territorios);
    }

    public function formulario() {
        return view("territorios.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $DescricaoTerritorio = $request->input("DescricaoTerritorio");
        DB::table('territorios')
        ->insert(
            ['IDTerritorio'=>$IDTerritorio,
            'DescricaoTerritorio'=>'abf',
            'IDRegiao'=>'10']
        );
        return redirect('/territorios');
    }

    public function deletar(Request $request, $IDTerritorio) {
        DB::table('territorios')->where('IDProduto', '=', $IDTerritorio)->delete();
        return redirect('/territorios');
    }

    public function formularioAlterar(Request $request, $IDTerritorios) {
        $territrios = DB::table('territoios')
                        ->where('IDTerritorio', '=', $IDTerritorio)
                        ->get();
                        //dd($territorios[0]);
        return view("territorios.alterar")->withTerritorios($territorios[0]);
    }

    public function alterar(Request $request, $IDTerritorio) {
        //dd($request->all());
        $DescricaoTerritorio = $request->input("DescricaoTerritorio");
        DB::table('territorios')
            ->where('IDTerritorio', '=', $IDTerritorio)
            ->update(['DescricaoTerritorio' => $DescricaoTerritorio]);
        
        return redirect('/territorios');
    }
}

