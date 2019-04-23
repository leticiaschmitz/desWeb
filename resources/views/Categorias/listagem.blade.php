@extends("principal")

@section("conteudo")
    <a href="/public/categorias/formulario" class="btn btn-primary">
        Cadastrar Novo Categoria
    </a>
    <hr>
    <h1>Listagem de Categorias</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($categorias as $p)
        <tr>
            <td>{{$p->IDCategoria}}</td>
            <td>{{$p->NomeCategoria}}</td>
            <td>{{$p->Descricao}}</td>
            <td>{{$p->Figura}}</td>
            <td>
                <a href="/public/categorias/alterar/formulario/{{$p->IDCategoria}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/categorias/deletar/{{$p->IDCategoria}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop