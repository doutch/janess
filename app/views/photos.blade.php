@extends('templates/template_main')

@section('titre')

    Services

@stop

@section('titre_contenu')
	Photos
@stop

@section('contenu')
	
	<h2 class = 'text-center'center'>Cliquez sur une photo pour démarrer le diaporama</h2>
	
	<div id="gallery">
	
		<div class = 'row'>
			
				@foreach ($tabImg as $index => $img)
				
					@if($index%6 == 0)
						</div>
						<div class = 'row'>
							
					@endif
				
					<div class = 'col-sm-2'>
						<a href="{{asset("/img/galerie_photo/full/$img")}}" rel="external">
							{{ HTML::image("img/galerie_photo/thumbs/$img","janess-traiteur-img$img ",array('class' => 'img-responsive img_shadow')) }}
						</a>
						<br>
					</div>
				@endforeach
			
			</div>
		
		</div>
		
	</div>
    
@stop
