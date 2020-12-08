@extends('layouts.app');

@section('conteudo') {{-- Area do layout onde eu quero que seja substituido--}}


{{--Formulario para editar notícia--}}
<form method="POST" action="/atualizar_noticia/{{$noticia->id}}">

{{--crsf para proteger o formulario contra ataques--}}
@csrf

<h3>Editar Notícia</h3>

{{--Titulo da noticia--}}
<div class="form-group">
	<label for="titulo">Título</label>
	<input type="text" class="form-control" id="titulo" name="txt_titulo" value="{{$noticia->titulo}}" required>
</div>

{{--Texto da noticia--}}
<div class="form-group">
	<label for="titulo">Texto</label>
	<textarea class="form-control" id="texto" name="txt_texto" placeholder="Texto" rows="5" required>{{$noticia->texto}}</textarea>
</div>

{{--Autor da noticia--}}
<div class="form-group">
	<label for="autor">Autor</label>
	<input type="text" class="form-control" id="autor" name="txt_autor" value="{{$noticia->autor}}" required>
</div>

{{--Visibilidade--}}
<div class="form-group text-center">

	@if ($noticia->visivel == 1)
		<input type="checkbox" name="check_visivel" checked> Notícia Visível
	@else
		<input type="checkbox" name="check_visivel"> Notícia Visível
	@endif
	
</div>

{{--Atualizar--}}
<div class="form-group text-center">
	<button class="btn btn-primary" role="submit">Salvar</button>
	
</div>

	
</form>

@endsection