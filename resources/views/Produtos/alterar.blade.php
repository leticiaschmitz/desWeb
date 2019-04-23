@extends("principal")

@section("conteudo")
<form method="POST" action="/public/produtos/alterar/{{$produtos->id}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$produto->NomeProdutos}}">

    <input type="submit" name="gravar">
</form>
@stop