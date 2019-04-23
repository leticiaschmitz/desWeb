@extends("principal")

@section("conteudo")
<form method="POST" action="/public/regiaio/alterar/{{$regiao->IDRegiao}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$regiao->DescricaoRegiao}}">

    <input type="submit" name="gravar">
</form>
@stop