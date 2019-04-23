@extends("principal")

@section("conteudo")
<form method="POST" action="/public/produtos/gravar">
    @method('POST')
    @csrf
    <input type="text" name="NomeProduto">

    <input type="submit" name="gravar">
</form>
@stop