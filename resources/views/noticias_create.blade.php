@extends('layouts.app');

@section('conteudo') {{-- Area do layout onde eu quero que seja substituido--}}


{{--Formulario para criação de nova notícia--}}
<form method="POST" action="/salvar_noticia">

{{--crsf para proteger o formulario contra ataques--}}
@csrf

<h3>Novas Notícias</h3>

{{--Titulo da noticia--}}
<div class="form-group">
	<label for="titulo">Título</label>
	<input type="text" class="form-control" id="titulo" name="txt_titulo" placeholder="Titulo" required>
</div>

{{--Texto da noticia--}}
<div class="form-group">
	<label for="titulo">Texto</label>
	<textarea class="form-control" id="texto" name="txt_texto" placeholder="Texto" rows="5" required></textarea>
</div>

{{--Autor da noticia--}}
<div class="form-group">
	<label for="autor">Autor</label>
	<input type="text" class="form-control" id="autor" name="txt_autor" placeholder="Autor" required>
</div>

{{--Visibilidade--}}
<div class="form-group text-center">
	<input type="checkbox" name="check_visivel" checked> Notícia Visível
</div>

{{--Submeter--}}
<div class="form-group text-center">
	<button class="btn btn-primary" role="submit">Salvar</button>

</div>


</form>

@endsection
