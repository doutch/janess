@extends('templates/template_main')

@section('titre')
    Merci de nous avoir contacté
@stop

@section('contenu')

<h1>Contacts</h1>

<div class = 'container'>

	<div class = 'row'>
		
		<h2 class = 'text-center'>Merci de nous avoir contacté!</h2>
		
		<p class = 'text-center'>Un email de confirmation vous a été envoyé avec en pièce jointe notre catalogue de prestations.</p>
		<p class = 'text-center'><b>Remarque:</b> si vous n'avez pas vu l'email de confirmation dans votre boite de réception, il se peut qu'il soit dans les courriers indésirables.</p>
		
        <div class='col-md-6 col-md-offset-3'>
			
			<div class = 'box_specialites_wrapper'>
				
				<div class = 'box_specialites_accueil'>
					
					<p>Pour rappel voici les infos que vous nous avez communiquées:</p>
					<p><b>Nom</b>: {{ $nom }} </p>
					<p><b>Prénom</b>: {{ $prenom }} </p>
					<p><b>Email</b>: {{ $email }}</p>
					<p><b>Numéro de téléphone</b>: {{ $tel }}</p>
					<p><b>Adresse</b>: {{ $adresse }}</p>
					<p><b>Code postal</b>: {{ $cp }}</p>
					<p><b>Ville</b>: {{ $ville }}</p>
					<p><b>Date prévue de votre réception</b>: {{ $date_evenement }}</p>
					<p><b>Lieu prévu de votre réception</b>: {{ $lieu_reception }}</p>
					<p><b>Nombre environ d'invités</b>: {{ $nombre_invites }}</p>
					<p><b>Message particulier à Janess</b>: {{ $message_janess }}</p>
				 </div>
        	 </div>
        </div>
	</div>

</div>

@stop
