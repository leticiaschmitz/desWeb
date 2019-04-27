
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionariosController extends Controller
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
        $funcionarios = DB::select("select * from funcionarios");
        return view("funcionarios.listagem")->withFuncionarios($funcionarios);
    }

    public function formulario() {
        return view("funcionarios.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $Nome = $request->input("Nome");
        DB::table('funcionarios')
        ->insert(
            ['IDFuncionario'=>$IDFuncionario,
            'Nome'=>'abf',
            'Sobrenone'=>'123',
            'Titulo'=>'10'
            'TituloCortesia'=>'2',
            'DataNac'=>'123',
            'Endereco'=>'10'
            'Cidade'=>'10'
            'Regiao'=>'2',
            'Cep'=>'10'
            'Pais'=>'10'
            'TelefoneResidencial'=>'10'
            'Extensao'=>'2',
            'Foto'=>'10'
            'Notas'=>'10'
            'Reportase'=>'10'
            'FotoCaminho'=>'10']
        );
        return redirect('/funcionarios');
    }

    public function deletar(Request $request, $IDFuncionario) {
        DB::table('funcionarios')->where('IDFuncionario', '=', $IDFuncionario)->delete();
        return redirect('/funcionarios');
    }

    public function formularioAlterar(Request $request, $IDFuncionario) {
        $produtos = DB::table('funcionarios')
                        ->where('IDFuncionario', '=', $IDFuncionario)
                        ->get();
                        //dd($funcionarios[0]);
        return view("funcionarios.alterar")->withFuncionarios($funcionarios[0]);
    }

    public function alterar(Request $request, $IDFuncionario) {
        //dd($request->all());
        $nome = $request->input("Nome");
        DB::table('funcionarios')
            ->where('IDFuncionario', '=', $IDFunconario)
            ->update(['Nome' => $Nome]);
        
        return redirect('/funcionarios');
    }
}