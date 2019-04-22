@extends("principal")

@section("conteudo")
<form method="POST" action="/public/produtos/alterar/{{$produto->id}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$produto->nome}}">

    <input type="submit" name="gravar">
</form>
@stop