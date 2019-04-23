@extends("principal")

@section("conteudo")
<form method="POST" action="/public/funcionarios/gravar">
    @method('POST')
    @csrf
    <input type="text" name="Nome">

    <input type="submit" name="gravar">
</form>
@stop