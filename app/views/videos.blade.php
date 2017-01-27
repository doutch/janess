@extends('templates/template_main')

@section('titre')

    Videos

@stop

@section('titre_contenu')
	Videos
@stop

@section('contenu')
	
<br>
	
	<div class = 'row'>

		<div class = "col-md-3 col-xs-12 mb15">
			<div class = "embed-responsive embed-responsive-16by9">
	
				<video controls class="embed-responsive-item">
				  	
				  	<source src="{{ URL::asset('videos/VIDEO_TRAITEUR.webm') }}" type="video/webm">
				  	<source src="{{ URL::asset('videos/VIDEO_TRAITEUR.ogg') }}" type="video/ogg">
				  	<source src="{{ URL::asset('videos/VIDEO_TRAITEUR.mp4') }}" type="video/mp4">
					
					Votre navigateur ne peut afficher cette vidéo.

				</video> 
			</div>
		</div>

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
	
				<video  controls class="embed-responsive-item">
			  	
				  	<source src="{{ URL::asset('videos/PROMOTION_2017_JANESS.webm') }}" type="video/webm">
				  	<source src="{{ URL::asset('videos/PROMOTION_2017_JANESS.ogg') }}" type="video/ogg">
				  	<source src="{{ URL::asset('videos/PROMOTION_2017_JANESS.mp4') }}" type="video/mp4">
					
					Votre navigateur ne peut afficher cette vidéo.

				</video> 
			</div>
		</div>

		

		
	</div>


	<div class = 'row'>

		<div class = "col-md-3 col-xs-12 mb15">
		
			 <div class = "embed-responsive embed-responsive-16by9">
	
				<video  controls class="embed-responsive-item">
			  	
				  	<source src="{{ URL::asset('videos/Janess_Salon_Elonga.webm') }}" type="video/webm">
				  	<source src="{{ URL::asset('videos/Janess_Salon_Elonga.ogg') }}" type="video/ogg">
				  	<source src="{{ URL::asset('videos/Janess_Salon_Elonga.mp4') }}" type="video/mp4">
					
					Votre navigateur ne peut afficher cette vidéo.

				</video> 
			</div>
		</div>


		<div class = "col-md-3 col-xs-12 mb15">
		
			 <div class = "embed-responsive embed-responsive-16by9">
	
				<video  controls class="embed-responsive-item">
			  	
				  	<source src="{{ URL::asset('videos/SERVICE_A_TABLE_3.webm') }}" type="video/webm">
				  	<source src="{{ URL::asset('videos/SERVICE_A_TABLE_3.ogg') }}" type="video/ogg">
				  	<source src="{{ URL::asset('videos/SERVICE_A_TABLE_3.mp4') }}" type="video/mp4">
					
					Votre navigateur ne peut afficher cette vidéo.

				</video> 
			</div>
		</div>

		<div class = "col-md-3 col-xs-12 mb15">
	
			 <div class = "embed-responsive embed-responsive-16by9">
	
				<video  controls class="embed-responsive-item">
			  	
				  	<source src="{{ URL::asset('videos/JANESS_VIDEO_3.webm') }}" type="video/webm">
				  	<source src="{{ URL::asset('videos/JANESS_VIDEO_3.ogg') }}" type="video/ogg">
				  	<source src="{{ URL::asset('videos/JANESS_VIDEO_3.mp4') }}" type="video/mp4">
					
					Votre navigateur ne peut afficher cette vidéo.

				</video> 
			</div>
		</div>

		<div class = "col-md-3 col-xs-12 mb15">
	
			<div class = "embed-responsive embed-responsive-16by9">
	
				<video  controls class="embed-responsive-item">
			  	
				  	<source src="{{ URL::asset('videos/PRESENTATION_JANESS.webm') }}" type="video/webm">
				  	<source src="{{ URL::asset('videos/PRESENTATION_JANESS.ogg') }}" type="video/ogg">
				  	<source src="{{ URL::asset('videos/PRESENTATION_JANESS.mp4') }}" type="video/mp4">
					
					Votre navigateur ne peut afficher cette vidéo.

				</video> 
			</div>
		</div>
		
		
		
	
	</div>


	<div class = 'row'>

		<div class = "col-md-3 col-xs-12 mb15">
	
			<div class="videowrapper">
            	<iframe class = "img_shadow" height="300" width="500" src="http://www.youtube.be/embed/6NAtYa1CG5w" frameborder="0" allowfullscreen=""></iframe>
         	</div>
		</div>

		<div class = 'col-md-3 col-xs-12 mb15'>
			<div class="videowrapper">
            	<iframe class = "img_shadow" height="300" width="500" src="http://www.youtube.be/embed/Dc-5Gz0_Nuo" frameborder="0" allowfullscreen=""></iframe>
         	</div>
		</div>

	</div>
		

    
@stop
