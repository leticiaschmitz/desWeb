@extends("principal")

@section("conteudo")
<form method="POST" action="/public/clientes/alterar/{{$cliente->id}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$clientes->nome}}">

    <input type="submit" name="gravar">
</form>
@stop