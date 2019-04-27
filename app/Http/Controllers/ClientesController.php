<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
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
        $clientes = DB::select("select * from clientes");
        return view("clientes.listagem")->withClientes($clientes);
    }

    public function formulario() {
        return view("clientes.formulario");
    }

    public function gravar(Request $request) {
        //dd($request->all());
        $NomeContato = $request->input("NomeContato");
        DB::table('clientes')
        ->insert(
            ['IDCliente'=>$IDCliente,
            'NomeCompanhia'=>'abc',
            'NomeContato'=>'joao',
            'TituloContato'=>'def'
            'Endereco'=>'rua',
            'Cidade'=>'salete'
            'Regiao'=>'sul',
            'CEP'=>'89196000'
            'Pais'=>'basil',
            'Telefone'=>'47984555088',
            'Fax'=>'2222']
        );
        return redirect('/clientes');
    }

    public function deletar(Request $request, $IDCliente) {
        DB::table('clientes')->where('IDCliente', '=', $IDCliente)->delete();
        return redirect('/clientes');
    }

    public function formularioAlterar(Request $request, $id) {
        $produto = DB::table('clientes')
                        ->where('id', '=', $id)
                        ->get();
                        //dd($cliente[0]);
        return view("clientes.alterar")->withClientes($clientes[0]);
    }

    public function alterar(Request $request, $IDCliente) {
        //dd($request->all());
        $NomeContato = $request->input("NomeContato");
        DB::table('clientes')
            ->where('IDCliente', '=', $IDCliente)
            ->update(['NoeContato' => $NomeContato]);
        
        return redirect('/clientes');
    }
}

