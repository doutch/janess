@extends('templates/template_main')

@section('titre')

    Accueil

@stop

@section('titre_contenu')
	Bienvenue Chez Janess
@stop


@section('contenu')

	<div class = "row">
		
		<div class = 'col-md-2 col-md-offset-2'>
			{{ HTML::image('img/accueil/87.jpg','janess-traiteur- plat-chaud ',array('class' => 'img-responsive img_shadow img-circle')) }}
		</div>

		<div class = 'col-md-8'>
			
			<br>
			<h2>La priorité chez nous est de vous servir un repas chaud !</h2>
			<h2>Et vous, aimeriez-vous mangez chaud ?</h2>
			
		</div>		

	</div>
      
	<div class = 'row'>
		<div class = 'col-md-3 col-sm-6'>
			{{ HTML::image('img/accueil/IMG_0112.JPG','janess-traiteur- thieboudienne ',array('class' => 'img-responsive img_shadow')) }}
		</div>
		
		<div class = 'col-md-3 col-sm-6'>
			{{ HTML::image('img/accueil/IMG_4970.jpg','janess-traiteur- entrees ',array('class' => 'img-responsive img_shadow')) }}
		</div>

		<div class = 'col-md-6 col-sm-12 marge_specialite_accueil'>
			

			<div class = 'box_specialites_wrapper'>
				
				<div class = 'box_specialites_accueil'>
				
					<h2 class = 'text-center'>A la découverte de l'ambiance africaine</h2>
				
					<p>Nous vous laissons découvrir le traiteur à l'instinct culinaire qui vous propose une cuisine principalement africaine</p>

					<p>Afin de rendre vos réceptions plus belles, Janess cuisine chalereusement vos plats préférés.</p>
					
				</div>
				
			</div>
		</div>
		
	</div>

	<hr></hr>


	<div class = 'row'>
		<h2>Actualités</h2>

		<div class="col-md-3">

			<h4>16 Janvier 2017</h4>

			{{ HTML::image('img/miss_ebene_cover.jpg','janess-traiteur - Miss Ebène couverture ',array('class' => 'img-responsive img_shadow')) }}
		</div>

		<div class="col-md-9">

			<blockquote>Le célèbre magazine miss Ebène s'est intéressé à notre société!</blockquote>
			
			 <p>Le magazine miss Ebène est disponible dans tous les kiosques.</p>

			 <p>Ils nous ont consacré un article ou nous présentons notre activité ainsi que nos prestations.</p>

			 <p>Merci à toute les personnes qui nous recommandent!!</p>

			<h2 class = 'text-center'>Le magazine de la femme moderne miss Ebène et janess Traiteur Africain vous souhaitent une bonne et hereuse année 2017!! </h2>


			<p>Pour voir un extrait de l'article <a href = '#' data-toggle="modal" data-target="#myModal">cliquez ici</a></p>

			<p>#LesMariagesMétissésChic</p>

			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Article Miss Ebène </h4>
			      </div>
			      <div class="modal-body">
			        {{ HTML::image('img/miss_ebene_article.jpg','janess-traiteur - Miss Ebène couverture ',array('class' => 'img_shadow')) }}
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
	</div>

	<hr></hr>
	
	<div class = 'row'>
		<div class = 'col-md-4'>
			{{ HTML::image('img/accueil/IMG_0009.JPG','janess-traiteur- services ',array('class' => 'img-responsive img_shadow')) }}
			<h2>Services</h2>
			<div class = 'desc'></div>
			<p>Nous avons une gamme de service de qualité et pouvant être personnalisée pour vos évènements privés ou professionnels</p>
			<a href="{{ URL::to('/services') }}" class="bouton_voir_plus">Voir plus</a>
		</div>
		
		<div class = 'col-md-4'>
			{{ HTML::image('img/accueil/DSC_0938.JPG','janess-traiteur- specialites ',array('class' => 'img-responsive img_shadow')) }}
			<h2>Spécialités</h2>
			<div class = 'desc'></div>
			<p>Un large choix de spécialités africaines vous est proposé pour l'ensemble de votre évènement et peut être adapté afin de vous satisfaire.</p>
			<a href="{{ URL::to('/prestations') }}" class="bouton_voir_plus">Voir plus</a>
		</div>
		
		<div class = 'col-md-4'>
			{{ HTML::image('img/accueil/DSC_0916.jpg','janess-traiteur- prestations ',array('class' => 'img-responsive img_shadow')) }}
			<h2>Prestations</h2>
			<div class = 'desc'></div>
			<p>Nous pouvons organiser tout ou une partie de votre réception et nos prestations sont pensées pour pouvoir correspondre à votre budget.</p>
			<a href="{{ URL::to('/specialites') }}" class="bouton_voir_plus">Voir plus</a>
		</div>
	</div>
	
	<hr></hr>
	
	@include('modules/module_carroussel_accueil')
	
	
	<hr>

	<div class = 'row'>
		<div class = 'col-md-12'>
			<h2>Vidéos</h2>
			<blockquote>Les images parlent plus que les mots!!!<p>N'hésitez pas à visionner notre vidéo promotionnelle qui vous donnera un apercu de nos prestations.</p></blockquote>
		</div>
	</div>


	<div class = 'row'>

		<div class = "col-md-3 col-xs-12 mb15">
			<div class = "embed-responsive embed-responsive-16by9">
	
				<video  controls class="embed-responsive-item">
				  	
				  	<source src="{{ URL::asset('videos/DECEMBRE.webm') }}" type="video/webm">
				  	<source src="{{ URL::asset('videos/DECEMBRE.ogg') }}" type="video/ogg">
				  	<source src="{{ URL::asset('videos/DECEMBRE.mp4') }}" type="video/mp4">
					
					Votre navigateur ne peut afficher cette vidéo.

				</video> 
			</div>

		</div>


		<div class = "col-md-3 col-xs-12 mb15">
			<div class = "embed-responsive embed-responsive-16by9">
	
				<video  controls class="embed-responsive-item">
				  	
				  	<source src="{{ URL::asset('videos/MANNEQUIN_CHALLENGE.webm') }}" type="video/webm">
				  	<source src="{{ URL::asset('videos/MANNEQUIN_CHALLENGE.ogg') }}" type="video/ogg">
				  	<source src="{{ URL::asset('videos/MANNEQUIN_CHALLENGE.mp4') }}" type="video/mp4">
					
					Votre navigateur ne peut afficher cette vidéo.

				</video> 
			</div>

		</div>

		
		<div class = "col-md-3 col-xs-12 mb15">
			<div class = "embed-responsive embed-responsive-16by9">
				<video controls class="embed-responsive-item">
				  	
				  	<source src="{{ URL::asset('videos/PROMOTION_2017_JANESS.webm') }}" type="video/webm">
				  	<source src="{{ URL::asset('videos/PROMOTION_2017_JANESS.ogg') }}" type="video/ogg">
				  	<source src="{{ URL::asset('videos/PROMOTION_2017_JANESS.mp4') }}" type="video/mp4">
					
					Votre navigateur ne peut afficher cette vidéo.

				</video> 
			</div>

		</div>

		<div class = "col-md-3 col-xs-12 mb15">
			<div class = "embed-responsive embed-responsive-16by9">
	
				<video controls class="embed-responsive-item">
				  	
				  	<source src="{{ URL::asset('videos/Janess_Salon_Elonga.webm') }}" type="video/webm">
				  	<source src="{{ URL::asset('videos/Janess_Salon_Elonga.ogg') }}" type="video/ogg">
				  	<source src="{{ URL::asset('videos/Janess_Salon_Elonga.mp4') }}" type="video/mp4">
					
					Votre navigateur ne peut afficher cette vidéo.

				</video> 
			</div>
		</div>

	</div>

	<a href="{{ URL::to('/galerie_video') }}" class="bouton_voir_plus">Voir plus</a>

	
	
	<hr></hr>
	
	<div class = 'row'>
		
		<div class = 'col-md-5'>
			{{ HTML::image('img/accueil/photo_contact.jpg','janess-traiteur- contact ',array('class' => 'img-responsive img_shadow')) }}
		</div>
		
		<div class = 'col-md-7 box_accueil_contacter'>
			
			<h2>Nous contacter</h2>
			
			<p>Des questions sur l'organisation de votre futur évènement? </p>
			<p>Ou sur la compositions des recettes de votre réception?</p>
			<p>Quelque soit vos interrogations, et fort de notre expérience, nous saurons vous guider dans cette période pour vous aider à faire de votre fête un moment inoubliable.</p>
			
			<p>Suivez nous aussi sur <a href="https://www.facebook.com/traiteurafricain.janess" target='_blank'>Facebook</a> et <a href='https://www.instagram.com/janesstraiteurafricain/' target='_blank'>Instagram</a> pour être au courant des dernières actualités.</p>
			
			<a href="{{ URL::to('/contact') }}" class="bouton_voir_plus">Nous contacter</a>
		</div>
	</div>	
@stop

