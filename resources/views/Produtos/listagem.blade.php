@extends("principal")

@section("conteudo")
    <a href="/public/produtos/formulario" class="btn btn-primary">
        Cadastrar Novo Produto
    </a>
    <hr>
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($produtos as $p)
        <tr>
            <td>{{$p->IdProduto}}</td>
            <td>{{$p->NomeProduto}}</td>
            <td>{{$p->IDFornecedor}}</td>
            <td>{{$p->IDCategoria}}</td>
            <td>{{$p->QuantidadePorUnidade}}</td>
            <td>{{$p->PrecoUnitario}}</td>
            <td>{{$p->UnidadesEmEstoque}}</td>
            <td>{{$p->UnidadesEmOrdem}}</td>
            <td>{{$p->NivelDeReposicao}}</td>
            <td>{{$p->Descontinuado}}</td>
            <td>
                <a href="/public/produtos/alterar/formulario/{{$p->IdProduto}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/produtos/deletar/{{$p->IdProduto}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop