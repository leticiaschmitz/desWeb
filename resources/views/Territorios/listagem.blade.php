@extends("principal")

@section("conteudo")
    <a href="/public/territorios/formulario" class="btn btn-primary">
        Cadastrar Novo Territorio
    </a>
    <hr>
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($territorios as $p)
        <tr>
            <td>{{$p->IDTerritorios}}</td>
            <td>{{$p->DescricaoTerritorio}}</td>
            <td>{{$p->IDRegiao}}</td>
            <td>
                <a href="/public/territorios/alterar/formulario/{{$p->IDTerritorio}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/territorios/deletar/{{$p->IDTerritorios}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop