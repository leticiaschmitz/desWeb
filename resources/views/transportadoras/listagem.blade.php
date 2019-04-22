@extends("principal")

@section("conteudo")
    <a href="/public/transportadoras/formulario" class="btn btn-primary">
        Cadastrar Nova Transportadora
    </a>
    <hr>
    <h1>Listagem de Transportadoras</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($transportadoras as $p)
        <tr>
            <td>{{$p->IDTransportadora}}</td>
            <td>{{$p->NomeCompanhia}}</td>
            <td>{{$p->Telefone}}</td>
            <td>
                <a href="/public/produtos/alterar/formulario/{{$p->IDTransportadoras}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/produtos/deletar/{{$p->IDTransportadoras}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop