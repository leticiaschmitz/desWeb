@extends("principal")

@section("conteudo")
<form method="POST" action="/public/Fornecedores/gravar">
    @method('POST')
    @csrf
    <input type="text" name="NomeContato">

    <input type="submit" name="gravar">
</form>
@stop