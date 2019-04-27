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
        $NomeCompanhia = $request->input("NomeCompanhia");
        DB::table('fornecedores')
        ->insert(
            ['IDFornecedor'=>$IDFornecedor,
            'NomeCompanhia'=>'abd',
            'NomeContato'=>'teste',
            'TituloContato'=>'10'
            'Endereco'=>'abd',
            'Cidade'=>'teste',
            'Regiao'=>'10'
            'cep'=>'abd',
            'Pais'=>'teste',
            'Telefone'=>'10'
            'Fax'=>'abd',
            'Website'=>'10']
        );
        return redirect('/fornecedores');
    }

    public function deletar(Request $request, $IDFornecedor) {
        DB::table('fornecedores')->where('IDFornecedor', '=', $IDFornecedor)->delete();
        return redirect('/fornecedores');
    }

    public function formularioAlterar(Request $request, $IDFornecedor) {
        $fornecedores = DB::table('fornecedores')
                        ->where('IDSornecedor', '=', $IDFornecedor)
                        ->get();
                        //dd($fornecedores[0]);
        return view("fornecedores.alterar")->withFornecedores($fornecedores[0]);
    }

    public function alterar(Request $request, $IDFornecedor) {
        //dd($request->all());
        $nome = $request->input("NomeCompanhia");
        DB::table('fornecedores')
            ->where('IDFornecedor', '=', $IDFornecedor)
            ->update(['NomeComapnhia' => $NomeCompanhia]);
        
        return redirect('/fornecedores');
    }
}

