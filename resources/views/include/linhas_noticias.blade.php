<div class="row">

	<table class="table table-striped">
	  <thead>
	    <tr>
	      
	      <th class="col-md-3">Título</th>
	      <th class="col-md-5">Texto</th>
	      <th class="col-md-2">Autor</th>
	      <th class="col-md-2">Gestão</th>

	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	     
	      <td>{{ $noticia->titulo }}</td>
	      <td>{{ $noticia->texto }}</td>
	      <td>{{ $noticia->autor }}</td>
	      
	      <td>
	      		
	      		{{-- Visibilidade--}}
	      		@if ($noticia->visivel == 1)
	      			
		      		<a href="colocar_invisivel/{{$noticia->id}}">
						<span class="glyphicon glyphicon-eye-open" style="margin-left: 10px"></span>
					</a>

				@else

					<a href="colocar_visivel/{{$noticia->id}}">
						<span class="glyphicon glyphicon-eye-close" style="margin-left: 10px; color: #ddd"></span>
					</a>

				@endif

				{{-- Editar--}}
				<a href="editar_noticia/{{$noticia->id}}">
					<span class="glyphicon glyphicon-pencil" style="margin-left: 10px"></span>
				</a>

				{{-- Deletar--}}
				<a href="eliminar_noticia/{{$noticia->id}}">
					<span class="glyphicon glyphicon-trash" style="margin-left: 10px"></span>
				</a>
	      </td>

	    </tr>
	  </tbody>
	</table>

</div>