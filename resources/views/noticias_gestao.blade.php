@extends('layouts.app');

@section('conteudo')

<h1>Gestão de Notícias</h1>
{{--Verifica se existe notícias--}}

	@if (count($noticias)==0) {{-- Se o campo das notícias for igual a zero --}}

	<dir class="row">
		<div class="col-md-12 text-center">
			<p class="alert alert-danger"> Não foram encontradas notícias</p>
			
		</div>
		
	</dir>
		
	@else
		
	@foreach ($noticias as $noticia) {{-- Ciclo da tabela--}}
		
		@include('include.linhas_noticias')	


	@endforeach

	@endif

	

@endsection