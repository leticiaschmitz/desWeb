@extends("principal")

@section("conteudo")
<form method="POST" action="/public/territorios/gravar">
    @method('POST')
    @csrf
    <input type="text" name="DescricaoTerritorio">

    <input type="submit" name="gravar">
</form>
@stop
