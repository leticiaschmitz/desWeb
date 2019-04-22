@extends("principal")

@section("conteudo")
<form method="POST" action="/public/transportadoras/alterar/{{$transportadora->id}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$transportadora->nome}}">

    <input type="submit" name="gravar">
</form>
@stop
