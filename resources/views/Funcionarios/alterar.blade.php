@extends("principal")

@section("conteudo")
<form method="POST" action="/public/funcionarios/alterar/{{$funcionarios->IDFuncionarios}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$funcionarios->Nome}}">

    <input type="submit" name="gravar">
</form>
@stop