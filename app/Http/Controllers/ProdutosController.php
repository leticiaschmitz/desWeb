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
        $produtos = DB::select("select * from produtos");
        return view("produtos.listagem")->withProdutos($produtos);
    }

    public function formulario() {
        return view("produtos.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $NomeProduto = $request->input("NomeProduto");
        DB::table('produtos')
        ->insert(
            ['IDProduto'=>$IDProduto,
            'NomeProduto'=>'abf',
            'IDFornecedor'=>'123',
            'IDCategoria'=>'10'
            'QuantifadePorUnidade'=>'2',
            'PrecoUnitario'=>'123',
            'UnidadesEmEstoque'=>'10'
            'UnidadesEmOrdem'=>'10'
            'NivelDeReposicao'=>'2',
            'Descontinuando'=>'10']
        );
        return redirect('/produtos');
    }

    public function deletar(Request $request, $IDProduto) {
        DB::table('produtos')->where('IDProduto', '=', $IDProduto)->delete();
        return redirect('/produtos');
    }

    public function formularioAlterar(Request $request, $IDProduto) {
        $produtos = DB::table('produtos')
                        ->where('IDProduto', '=', $IDProduto)
                        ->get();
                        //dd($produtos[0]);
        return view("produtos.alterar")->withProdutos($produtos[0]);
    }

    public function alterar(Request $request, $IDProduto) {
        //dd($request->all());
        $NomeProduto = $request->input("NomeProduto");
        DB::table('produtos')
            ->where('IDProduto', '=', $IDProduto)
            ->update(['NomeProduto' => $NomeProduto]);
        
        return redirect('/produtos');
    }
}
