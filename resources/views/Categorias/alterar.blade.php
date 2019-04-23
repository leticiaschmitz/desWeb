@extends("principal")

@section("conteudo")
<form method="POST" action="/public/categorias/alterar/{{$categorias->IDCategoria}}">
    @method('POST')
    @csrf
    <input type="text" name="nome" value="{{$categorias->IDCategoria}}">

    <input type="submit" name="gravar">
</form>
@stop