@extends("principal")

@section("conteudo")
<form method="POST" action="/public/territorios/alterar/{{$territoriosweb-IDTerritorio}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$territorios->DescricaoTerritorio}}">

    <input type="submit" name="gravar">
</form>
@stop