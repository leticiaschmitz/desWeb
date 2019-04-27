<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FornecedoresController extends Controller
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
        $fornecedores = DB::select("select * from fornecedores");
        return view("fornecedores.listagem")->withFornecedores($fornecedores);
    }

    public function formulario() {
        return view("fornecedores.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $nome = $request->input("nome");
        DB::table('fornecedores')
        ->insert(
            ['nome'=>$nome,
            'valor'=>'10',
            'descricao'=>'teste',
            'quantidade'=>'10']
        );
        return redirect('/fornecedores');
    }

    public function deletar(Request $request, $id) {
        DB::table('fornecedores')->where('id', '=', $id)->delete();
        return redirect('/fornecedores');
    }

    public function formularioAlterar(Request $request, $id) {
        $fornecedores = DB::table('fornecedores')
                        ->where('id', '=', $id)
                        ->get();
                        //dd($fornecedores[0]);
        return view("fornecedores.alterar")->withFornecedores($fornecedores[0]);
    }

    public function alterar(Request $request, $id) {
        //dd($request->all());
        $nome = $request->input("nome");
        DB::table('fornecedores')
            ->where('id', '=', $id)
            ->update(['nome' => $nome]);
        
        return redirect('/fornecedores');
    }
}

