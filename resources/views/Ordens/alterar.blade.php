@extends("principal")

@section("conteudo")
<form method="POST" action="/public/ordens/alterar/{{$ordens->IDOrdem}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$ordens->IDClicente}}">

    <input type="submit" name="gravar">
</form>
@stop