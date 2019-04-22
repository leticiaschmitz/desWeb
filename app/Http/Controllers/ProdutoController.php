<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
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
        $produtos = DB::select("select * from produtos");
        return view("produto.listagem")->withProdutos($produtos);
    }

    public function formulario() {
        return view("produto.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $nome = $request->input("nome");
        DB::table('produtos')
        ->insert(
            ['nome'=>$nome,
            'valor'=>'10',
            'descricao'=>'teste',
            'quantidade'=>'10']
        );
        return redirect('/produtos');
    }

    public function deletar(Request $request, $id) {
        DB::table('produtos')->where('id', '=', $id)->delete();
        return redirect('/produtos');
    }

    public function formularioAlterar(Request $request, $id) {
        $produto = DB::table('produtos')
                        ->where('id', '=', $id)
                        ->get();
                        //dd($produto[0]);
        return view("produto.alterar")->withProduto($produto[0]);
    }

    public function alterar(Request $request, $id) {
        //dd($request->all());
        $nome = $request->input("nome");
        DB::table('produtos')
            ->where('id', '=', $id)
            ->update(['nome' => $nome]);
        
        return redirect('/produtos');
    }
}
