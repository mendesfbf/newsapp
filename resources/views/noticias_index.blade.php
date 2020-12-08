{{--Pagina Inicial - apresenta as notícias visíveis --}}

@extends('layouts.app');

@section('conteudo')

@if (count($dados)==0)
	{{--não existe notícias--}}
	<p class="alert alert-danger text-center">Não Foram encontradas Notícias</p>

@else
	{{--apresentar as notícias presentes na base de dados--}}

	{{--contador--}}
	@php
	  $total = 0;
	@endphp

	@foreach ($dados as $noticia)

		{{--Verifica se a notícia está visivel ou não--}}

		@if ($noticia->visivel == 1)
			
		{{--cabeçalho de noticia --}}
		<div class="row bg-info">
			{{--titulo--}}
			<div class="col-md-9">
				<h2>{{$noticia->titulo}}</h2>
			</div>

				{{-- autor e hora --}}
				<div class="col-md-3 text-right" style ="padding-top: 10px ">
					<span class="glyphicon glyphicon-pencil"></span> {{ $noticia->autor }}
					<span class="glyphicon glyphicon-time"></span> {{ $noticia->updated_at->diffForHumans() }}
				</div>
			</div>

				{{--Corpo da Notícia--}}

				<div class="row">
					<div class="col-md-12" style="padding-top: 5px">
						{{ $noticia->texto }}
						
					</div>
						
				</div>

				
			{{-- separador --}}
			<hr>

			{{--Atualizador do total de notícias contadas--}}
			@php
				$total++;
			@endphp


			@endif
	@endforeach
	
	{{--Contador de notícias--}}
	<div class="row">
		<div class="col-md-12 text-right">
			<p>Nº total de notícias: {{ $total }}</p>
			
		</div>
	</div>

@endif

@endsection


