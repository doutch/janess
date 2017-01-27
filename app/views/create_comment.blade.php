@extends('templates/template_main')

@section('titre')

    Livre d'or - Insérer un message

@stop

@section('titre_contenu')
	
	Livre d'or - Insérer un message
	
@stop

@section('image_header')

	{{ HTML::image('img/livre_dor/signature-mariage.jpg','janess-traiteur- service-header ',array('class' => 'img-responsive img_shadow_header')) }}

@stop

	
@section('contenu')

	<div class = 'row'>
		
		<div class = 'col-md-6 col-md-offset-3'>

			{{ Form::open(array('route' => 'comment_envoye','class' => 'form','files'=> true)) }}

				<div class="form-group {{ $errors->has('pseudo') ? 'has-error' : '' }}">
					{{ Form::text('pseudo', null, ['required', 'class' => 'form-control', 'placeholder' => "* Nom/Pseudo"]) }}
					{{ $errors->first('pseudo', '<small class="help-block">:message</small>') }}
				</div>

				<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
					{{ Form::email('email', null, ['required', 'class' => 'form-control', 'placeholder' => "* Email"]) }}
					{{ $errors->first('email', '<small class="help-block">:message</small>') }}
				</div>
			
				<div class="form-group {{ $errors->has('texte') ? 'has-error' : '' }}">
					{{ Form::textarea('texte', null, ['required', 'class' => 'form-control', 'placeholder' => "* Message pour le livre d'or",'size' => '30x5']) }}
					{{ $errors->first('texte', '<small class="help-block">:message</small>') }}
				</div>
				
				<div class="form-group {{ $errors->has('texte') ? 'has-error' : '' }}">
					{{ Form::label('label_photo', 'Vous pouvez aussi ajouter une photo') }}
					{{ Form::file('photo', null, ['required', 'class' => 'form-control', 'placeholder' => "Télécharger une photo"]) }}
					{{ $errors->first('photo', '<small class="help-block">:message</small>') }}
				</div>

				{{ Form::submit('Envoyer!', array('class' => 'bouton_voir_plus')) }}

			{{ Form::close() }}
			
		</div>
		
	</div>
	
@stop
