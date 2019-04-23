@extends("principal")

@section("conteudo")
<form method="POST" action="/public/ordens/gravar">
    @method('POST')
    @csrf
    <input type="text" name="IDCliente">

    <input type="submit" name="gravar">
</form>
@stop