@extends("principal")

@section("conteudo")
    <a href="/public/fornecedores/formulario" class="btn btn-primary">
        Cadastrar Novo Fornecedor
    </a>
    <hr>
    <h1>Listagem de Fornecedores</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($fornecedores as $p)
        <tr>
            <td>{{$p->IDFornecedor}}</td>
            <td>{{$p->NomeCompanhia}}</td>
            <td>{{$p->NomeContato}}</td>
            <td>{{$p->TituloContato}}</td>
            <td>{{$p->Endereco}}</td>
            <td>{{$p->Cidade}}</td>
            <td>{{$p->Regiao}}</td>
            <td>{{$p->Cep}}</td>
            <td>{{$p->Pais}}</td>
            <td>{{$p->Telefone}</td>
            <td>{{$p->Fax}}</td>
            <td>{{$p->Website}}</td>
            <td>
                <a href="/public/fornecedores/alterar/formulario/{{$p->IDFornecedor}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/fornecedores/deletar/{{$p->IDFornecedor}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop