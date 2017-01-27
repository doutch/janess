@extends('templates/template_main')

@section('titre')
    Merci pour votre message sur le livre d'or!
@stop

@section('image_header')

	{{ HTML::image('img/livre_dor/signature-mariage.jpg','janess-traiteur- service-header ',array('class' => 'img-responsive img_shadow_header')) }}

@stop

@section('contenu')

<h1>Livre d'or</h1>

<div class = 'container'>

	<div class = 'row'>
		
		<h2 class = 'text-center'> Merci pour votre message sur le livre d'or!</h2>
		
		<p class = 'text-center'>Un email vous a été envoyé avec la copie du message que vous nous avez laissé.</p>
		<p class = 'text-center'><b>Remarque:</b> si vous n'avez pas vu l'email de confirmation dans votre boite de réception, il se peut qu'il soit dans les courriers indésirables.</p>
		
        <div class='col-md-6 col-md-offset-3'>
			
			<div class = 'box_specialites_wrapper'>
				
				<div class = 'box_specialites_accueil'>
					
					<p>Pour rappel voici les infos que vous nous avez communiquées:</p>
					<p><b>Pseudo/nom</b>: {{ $pseudo }} </p>
					<p><b>Email</b>: {{ $email }}</p>
					<p><b>Votre message</b>: {{ $texte }}</p>
				 </div>
        	 </div>
        </div>
	</div>

</div>

@stop
