@extends("principal")

@section("conteudo")
    <a href="/public/ordens/formulario" class="btn btn-primary">
        Cadastrar Nova Ordem
    </a>
    <hr>
    <h1>Listagem de Ordens</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($ordens as $p)
        <tr>
            <td>{{$p->IDOrdem}}</td>
            <td>{{$p->IDCliente}}</td>
            <td>{{$p->IDFuncionario}}</td>
            <td>{{$p->DataOrdem}}</td>
            <td>{{$p->DataRequisicao}}</td>
            <td>{{$p->DataEntrega}}</td>
            <td>{{$p->EnviadoPor}}</td>
            <td>{{$p->Frete}}</td>
            <td>{{$p->NomeDestinatario}}</td>
            <td>{{$p->EnderecoDestinatario}}</td>
            <td>{{$p->CidadeDestinatario}}</td>
            <td>{{$p->RegiaoDestinatario}}</td>
            <td>{{$p->CepDestinatario}}</td>
            <td>{{$p->PaisDestinatario}}</td>
            <td>
                <a href="/public/ordens/alterar/formulario/{{$p->IDOrdem}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/produtos/deletar/{{$p->IDOrdem}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop