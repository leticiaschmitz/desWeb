@extends("principal")

@section("conteudo")
<form method="POST" action="/public/fornecedores/alterar/{{$fornecedores->IDFornecedor}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$fornecedor->NomeContato}}">

    <input type="submit" name="gravar">
</form>
@stop