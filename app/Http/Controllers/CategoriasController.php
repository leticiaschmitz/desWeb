<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
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
        $categorias = DB::select("select * from categorias");
        return view("categorias.listagem")->withCategorias($categorias);
    }

    public function formulario() {
        return view("categorias.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $NomeCategoria = $request->input("NomeCategoria");
        DB::table('categorias')
        ->insert(
            ['IDCategoria'=>$IDCategoria,
            'NomeCategoria'=>'abf',
            'Descricao'=>'123',
            'Figura'=>'10']
        );
        return redirect('/categorias');
    }

    public function deletar(Request $request, $IDCategoria) {
        DB::table('categorias')->where('IDCategoria', '=', $IDCategoria)->delete();
        return redirect('/categorias');
    }

    public function formularioAlterar(Request $request, $IDCategoria) {
        $categorias = DB::table('categorias')
                        ->where('IDCategoria', '=', $IDCategoria)
                        ->get();
                        //dd($categorias[0]);
        return view("produtos.alterar")->withCategorias($categorias[0]);
    }

    public function alterar(Request $request, $id) {
        //dd($request->all());
        $NomeCategoria = $request->input("NomeCategoria");
        DB::table('categorias')
            ->where('IDCategoria', '=', $IDCategoria)
            ->update(['NomeCategoria' => $NomeCategoria]);
        
        return redirect('/categorias');
    }
}

