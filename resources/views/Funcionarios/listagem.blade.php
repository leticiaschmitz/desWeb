@extends("principal")

@section("conteudo")
    <a href="/public/funcionarios/formulario" class="btn btn-primary">
        Cadastrar Novo Funcionario
    </a>
    <hr>
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hove">
        @foreach ($funcionarios as $p)
        <tr>
            <td>{{$p->IDFuncionario}}</td>
            <td>{{$p->Sobrenome}}</td>
            <td>{{$p->Nome}}</td>
            <td>{{$p->Titulo}}</td>
            <td>{{$p->TituloCortesia}}</td>
            <td>{{$p->DataNac}}</td>
            <td>{{$p->DataAdmissao}}</td>
            <td>{{$p->Endereco}}</td>
            <td>{{$p->Cidade}}</td>
            <td>{{$p->Regiao}}</td>
            <td>{{$p->Cep}}</td>
            <td>{{$p->Pais}}</td>
            <td>{{$p->TelefoneResidencial}}</td>
            <td>{{$p->Extensao}}</td>
            <td>{{$p->Foto}}</td>
            <td>{{$p->Notas}}</td>
            <td>{{$p->Reportase}}</td>
            <td>{{$p->FotoCaminho}}</td>
            <td>
                <a href="/public/funcionarios/alterar/formulario/{{$p->IDFuncionario}}">
                    <i class="fas fa-search"></i>
                </a>
                <a href="/public/produtos/deletar/{{$p->IDFuncionario}}">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@stop