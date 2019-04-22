@extends("principal")

@section("conteudo")
<form method="POST" action="/public/transportadoras/gravar">
    @method('POST')
    @csrf
    <input type="text" name="IDTransportadora">

    <input type="submit" name="gravar">
</form>
@stop