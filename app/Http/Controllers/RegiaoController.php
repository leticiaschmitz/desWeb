<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegiaoController extends Controller
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
        $regiao = DB::select("select * from regiao");
        return view("regiao.listagem")->withRegiao($regiao);
    }

    public function formulario() {
        return view("regiao.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $DescricaoRegiao = $request->input("DescricaoRegiao");
        DB::table('regiao')
        ->insert(
            ['IDRegiao'=>$IDRegiao,
            'DescricaoRegiao'=>'abf']
        );
        return redirect('/regiao');
    }

    public function deletar(Request $request, $IDProduto) {
        DB::table('regiao')->where('IDRegiao', '=', $IDRegiao)->delete();
        return redirect('/regiao');
    }

    public function formularioAlterar(Request $request, $IDRegiao) {
        $regiao = DB::table('regiao')
                        ->where('IDRegao', '=', $IDRegiao)
                        ->get();
                        //dd($regiao[0]);
        return view("regiao.alterar")->withRegiao($regiao[0]);
    }

    public function alterar(Request $request, $id) {
        //dd($request->all());
        $nome = $request->input("DescricaoRegiao");
        DB::table('regiao')
            ->where('IDRegiao', '=', $IDRegiao)
            ->update(['DescricaoRegiao' => $DescricaoRegiao]);
        
        return redirect('/regiao');
    }
}
