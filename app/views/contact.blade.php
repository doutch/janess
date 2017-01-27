@extends('templates/template_main')

@section('titre')

    Contact

@stop

@section('titre_contenu')
	Contact
@stop


@section('contenu')
	
	<p class = 'text-center'>Pour vos commandes, vous pouvez nous joindre au: <b>06.21.82.77.20</b> ou nous envoyer un mail à <b>janesstraiteurafricain@yahoo.fr</b>.</p>
	
	<p class = 'text-center'>Ou merci de remplir le formulaire ci-dessous.</p>
	
	<p class = 'text-center'>Nous vous recontacterons très bientôt.</p>
	
	<div class = 'row'>
	
		{{ Form::open(array('route' => 'contact_message_envoye', 'class' => 'form')) }}
		
			<div class = 'col-md-6'>
					
				<legend><h2>Vous</h2></legend>
		
				<div class="form-group">
					
					{{ Form::select('civilite', array('mr' => 'Monsieur', 'mme' => 'Madamme','mlle' => 'Mademmoiselle'), ['class' => 'form-control', 'placeholder' => 'Votre nom']) }}

				</div>
			
				<div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
					{{ Form::text('nom', null, ['required', 'class' => 'form-control', 'placeholder' => 'Nom *']) }}

					{{ $errors->first('nom', '<small class="help-block">:message</small>') }}
				</div>
				
				<div class="form-group {{ $errors->has('prenom') ? 'has-error' : '' }}">
					{{ Form::text('prenom', null, ['required', 'class' => 'form-control', 'placeholder' => 'Prénom *']) }}

					{{ $errors->first('prenom', '<small class="help-block">:message</small>') }}
				</div>
				
				<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
					{{ Form::email('email', null, ['required', 'class' => 'form-control', 'placeholder' => 'Email *']) }}

					{{ $errors->first('email', '<small class="help-block">:message</small>') }}
				</div>
				
				<div class="form-group {{ $errors->has('tel') ? 'has-error' : '' }}">
					{{ Form::text('tel', null, ['required', 'class' => 'form-control', 'placeholder' => 'Téléphone *']) }}

					{{ $errors->first('tel', '<small class="help-block">:message</small>') }}
				</div>
				
				<div class="form-group {{ $errors->has('adresse') ? 'has-error' : '' }}">
					{{ Form::text('adresse', null, ['required', 'class' => 'form-control', 'placeholder' => ' Adresse *']) }}

					{{ $errors->first('adresse', '<small class="help-block">:message</small>') }}
				</div>
				
				<div class="form-group {{ $errors->has('cp') ? 'has-error' : '' }}">
					{{ Form::text('cp', null, ['required', 'class' => 'form-control', 'placeholder' => 'Code postal *']) }}

					{{ $errors->first('cp', '<small class="help-block">:message</small>') }}
				</div>
				
				<div class="form-group {{ $errors->has('ville') ? 'has-error' : '' }}">
					{{ Form::text('ville', null, ['required', 'class' => 'form-control', 'placeholder' => 'Ville *']) }}

					{{ $errors->first('ville', '<small class="help-block">:message</small>') }}
				</div>
				
				
			</div>
			
			<div class = 'col-md-6'>
				
				<legend><h2>Votre réception.</h2></legend>
				
				<div class="form-group">
					
					{{ Form::select('reception', array('mariage' => 'Mariage', 'fete' => "Fête",'affaire' => "Repas d'affaire",'diner' => "Diner familial", 'bapteme' => "Baptême",'gala' => 'Gala'), 
									['class' => 'form-control', 'placeholder' => 'Type de réception']) }}

				</div>
				
				<div class="form-group {{ $errors->has('date_evenement') ? 'has-error' : '' }}">
					{{ Form::text('date_evenement', null, ['class' => 'form-control', 'id' => 'datepicker', 'placeholder' => "Date de l'évènement"]) }}

					{{ $errors->first('date_evenement', '<small class="help-block">:message</small>') }}
				</div>
				
				<div class="form-group {{ $errors->has('lieu_reception') ? 'has-error' : '' }}">
					{{ Form::textarea('lieu_reception', null, ['class' => 'form-control', 'placeholder' => "Lieu de la réception",'size' => '30x5']) }}

					{{ $errors->first('lieu_reception', '<small class="help-block">:message</small>') }}
				</div>
				
				<div class="form-group {{ $errors->has('nombre_invites') ? 'has-error' : '' }}">
					{{ Form::text('nombre_invites', null, ['class' => 'form-control', 'placeholder' => "Nombre environ d'invités"]) }}

					{{ $errors->first('nombre_invites', '<small class="help-block">:message</small>') }}
				</div>
				
				<div class="form-group {{ $errors->has('message_janess') ? 'has-error' : '' }}">
					{{ Form::textarea('message_janess', null, ['class' => 'form-control', 'placeholder' => "Message particulier à Janess",'size' => '30x5']) }}

					{{ $errors->first('message_janess', '<small class="help-block">:message</small>') }}
				</div>
				
				<p>Les champs suivis d'un * sont obligatoires.</p>
				
				<div class="form-group">
					{{ Form::submit('Envoyer!', array('class'=>' bouton_voir_plus')) }}
				</div>
				
			</div>
		
		{{ Form::close() }}
		
	</div>
	
	<div class = 'row'>
		
		<h2 class = 'text-center'>Notre adresse:</h2>
		<p class = 'text-center'><b>Janess Traiteur Africain</b> - 105 bd de Strasbourg - 94130 Nogent Sur Marne</p>
		
		<!-- gMap script container !Do not remove!! -->
		<div id="map-canvas" style = "width:100%;height:250px;"></div>
		
	</div>
    
@stop
