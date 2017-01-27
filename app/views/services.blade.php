@extends('templates/template_main')

@section('titre')

    Services

@stop

@section('image_header')

	{{ HTML::image('img/services/IMG_0009.JPG','janess-traiteur- service-header ',array('class' => 'img-responsive img_shadow_header')) }}

@stop

@section('titre_contenu')
	Services
@stop

@section('contenu')
	
	<div class = 'row'>
		
		<div class = 'col-sm-3'>
			{{ HTML::image('img/services/photo11.JPG','janess-traiteur- service-personnalise ',array('class' => 'img-responsive img_shadow')) }}
		</div>
	
	
		<div class = 'col-sm-9'>
			<h2>Un service personnalisé pour vos évènements privés ou professionnels.</h2>
			
			<p><b>JANESS Traiteur Africain</b> prépare pour vous avec soin les saveurs les plus audacieuses et assemble les menus les plus dépaysants pour vos:</p>
			
			<ul>
			
				<li>Réceptions de mariage.</li>
				<li>Gala.</li>
				<li>Baptême.</li>
				<li>Repas d'affaires.</li>
				<li>Dîners familiaux.</li>
			</ul>
		</div>

	</div>
	
	<div class = 'row'>
		
		<div class = 'col-sm-9'>
		
			<h2>La qualité avant tout.</h2>
			
			<p>L'équipe de Janess est à l'écoute de vos désirs et garantit la réussite de votre réception avec une cuisine irréprochable.</p>
			
			<p>De plus, nous pouvons cuisiner avec de la viande hallal sur commande.</p>
			
			<p>Pour une garantie fraicheur irréprochable nos plats sont cuisinés avec soin et transportés sur le lieux de réception dans des bacs isotermes hygiéniques.Les plats chauds sont réchauffés sur place.</p>
		
		</div>
		
		<div class = 'col-sm-3'>
			{{ HTML::image('img/services/2.jpg','janess-traiteur- service-qualite ',array('class' => 'img-responsive img_shadow')) }}
		</div>
		
	</div>
	
	<hr>
	
	<div class = 'row'>
		
		<div class = 'col-sm-3'>
			
			{{ HTML::image('img/services/3.jpg','janess-traiteur- service-organisation ',array('class' => 'img-responsive img_shadow')) }}
			
		</div>
		
		<div class = 'col-sm-9'>
	
			<h2>Vous pouvez avoir l'esprit tranquille.</h2>
			
			<p>Le traiteur peut prendre en charge une partie ou l'intégralité de l'organisation, en vous proposant:</p>
			
			<ul>
					
				<li>un vin d'honneur.</li>
				<li>La vaisselle</li>
				<li>le dressage du buffet.</li>
				<li>la décoration de la salle.</li>
				<li>Le gateau de la réception</li>
					
			</ul>
			
		</div>
		
	</div>
	
	<div class = 'row'>
		
		<div class = 'col-sm-12'>
			<p>Notre équipe est composée de 6 postes fixes et de 20 à 50 postes variables suivant les évènements et types de journée.</p>
				
			<p>Nos partenaires spécialisés dans la location de vaisselles et pour la décoration de votre salle de réception seront heureux de rendre encore plus beaux ce jour si exceptionnel.</p>
			
			<p>Pour vos pièces montées nous travaillons en partenariat avec une excellente patisserie qui vous proposera des prix très avantageux.</p>
		</div>
	</div>
	
	<div class = 'row'>
		
		<div class = 'col-sm-9'>
		
			<h2>A la rencontre de la cuisine africaine.</h2>
			
			<p>Afin de promouvoir notre culture nous vous conseillons gratuitement et aidons les personnes qui veulent apprendre ou comprendre la cuisine africaine.</p>
			
			<p><b>JANESS Traiteur Africain</b> organise aussi pour vous sur demande des dégustations sur rendez-vous à domicile.</p>
		</div>
		
		<div class = 'col-sm-3'>
			{{ HTML::image('img/services/IMG_0104.JPG','janess-traiteur- service-decouverte-cuisine-africaine ',array('class' => 'img-responsive img_shadow')) }}
		</div>
	</div>
		
    
@stop
