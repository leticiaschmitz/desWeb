@extends("principal")

@section("conteudo")
    <a href="/public/regiao/formulario" class="btn btn-primary">
        Cadastrar Nova Regiao
    </a>
    <hr>
    <h1>Listagem de Regiao</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($regiao as $p)
        <tr>
            <td>{{$p->IDRegiao}}</td>
            <td>{{$p->DescricaoRegiao}}</td>
            <td>
                <a href="/public/regiao/alterar/formulario/{{$p->IDRegiao}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/produtos/deletar/{{$p->IDRegiao}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop