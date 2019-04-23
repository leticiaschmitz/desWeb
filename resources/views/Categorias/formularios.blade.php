@extends("principal")

@section("conteudo")
<form method="POST" action="/public/categorias/gravar">
    @method('POST')
    @csrf
    <input type="text" name="NomeCategoria">

    <input type="submit" name="gravar">
</form>
@stop
