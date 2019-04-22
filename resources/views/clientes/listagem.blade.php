@extends("principal")

@section("conteudo")
    <a href="/public/clientes" class="btn btn-primary">
        Cadastrar Novo Cliente</a>
    <hr>
    <h1>Listagem de Clientes</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($clientes as $p)
        <tr>
            <td>{{$p->IDCliente}}</td>
            <td>{{$p->NomeCompanhia}}</td>
            <td>{{$p->NomeContato}}</td>
            <td>{{$p->TituloContato}}</td>
            <td>{{$p->Endereco}}</td>
            <td>{{$p->Cidade}}</td>
            <td>{{$p->Regiao}}</td>
            <td>{{$p->CEP}}</td>
            <td>{{$p->Pais}}</td>
            <td>{{$p->Telefone}}</td>
            <td>{{$p->Fax}}</td>
            <td>
                <a href="/public/clientes/alterar/formulario/{{$p->IdClente}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/clientes/deletar/{{$p->IdCliente}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop
