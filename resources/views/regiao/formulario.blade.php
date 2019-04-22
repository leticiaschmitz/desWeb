@extends("principal")

@section("conteudo")
<form method="POST" action="/public/regiao/gravar">
    @method('POST')
    @csrf
    <input type="text" name="DescricaoRegiao">

    <input type="submit" name="gravar">
</form>
@stop