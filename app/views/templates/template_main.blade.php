<!doctype html>
<html lang='fr'>
    <head>
        <title>Janess traiteur africain - @yield('titre')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

 
        <!-- Boostrap-->
        {{ HTML::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') }}

        {{ HTML::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css') }}
        
          <!-- Font Awesome -->
        {{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}

        <!--[if lt IE 9]>

            {{ HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}

            {{ HTML::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}

        <![endif]-->
        
        <!-- Style perso-->
		{{ HTML::style('css/style.css') }}

		<!-- slider si page d'accueil -->
        @if(Request::path() === '/') 
       
			 <!-- Style slider perso-->
			{{ HTML::style('css/jssor_perso.css') }}
			
		@endif
        
         <!-- Datepicker si page d'accueil -->
         @if(Request::path() === 'contact')
         
			<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
			
		@endif
		
		<!-- Css de la galerie photo-->
         @if(Request::path() === 'photos')
         
			{{ HTML::style('css/photoswipe.css') }}
			
		@endif

        <style> textarea { resize: none; } </style>

    </head>
    
    <!-- ajout des informations scrollspy pour certaines pages-->
    @if((Request::path() === 'specialites') || (Request::path() === 'prestations'))  
		<body data-spy="scroll" data-target="#mySidebar">
		
	@else
		<body>
	@endif

		<!-- Script pour le bouton j'aime de Facebook -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6&appId=377745779048940";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
			
		<!-- header-->
        <header>
            <div class = 'top-header'>
                
                <div class = 'header-menu'>

                    <div class = 'container'>

                        <nav class="navbar navbar-default navbar-fixed-top">
                        	<div class="container">
	                        	<div class="text-right">
									<p>Suivez nous sur
										<a class="facebookBtn smGlobalBtn" href="https://www.facebook.com/traiteurafricain.janess" target='_blank' ></a>
										<a class="instagramBtn smGlobalBtn" href="https://www.instagram.com/janesstraiteurafricain/" target='_blank' ></a>
									</p>
								</div>
							</div>

                            <div class="container">
                                
                                <div class="navbar-header">
                                    
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-menu-principal">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    {{ HTML::image('img/logo2.png','janess-traiteur- logo ',array('class' => 'img-responsive')) }}
                                </div>

								<!-- Menu -->
                                <div class="collapse navbar-collapse" id='bs-menu-principal'>
                                    <ul class="nav navbar-nav">
                                        <li>{{ HTML::linkRoute('home', 'Accueil') }}</li>
                                        <li>{{ HTML::linkRoute('services', 'Services') }}</li>
                                        <li>{{ HTML::linkRoute('specialites', 'Spécialités') }}</li>
                                        <li>{{ HTML::linkRoute('prestations', 'Prestations') }}</li>
                                        <li>{{ HTML::linkRoute('photos', 'Photos') }}</li>
                                        <li>{{ HTML::linkRoute('galerie_video', 'Vidéos') }}</li>
                                        <li>{{ HTML::linkRoute('references', 'Actualités') }}</li>
                                         <li>{{ HTML::linkRoute('livre_dor', "Livre d'or" ) }}</li>
                                        <li>{{ HTML::linkRoute('contact', 'Contact') }}</li>
                                    </ul>
                                </div>

                            </div>
                        </nav>
                    </div>

                </div>
                
                <!-- slider si page d'accueil -->
                @if(Request::path() === '/') 

					@include('modules/module_slider_accueil')
					
				@else
				
					@yield('image_header')
					
				@endif
						
            </div>
        </header>

		<!-- conteneur principal -->
        <div class = 'container conteneur_main'>
			
			<!-- Titre du contenu-->
			<div class 'row'>
				<h1>
					@yield('titre_contenu')
				</h1>
				
				@if(Request::path() === '/')
				
					<h2 class = 'text-center'>Traiteur africain - Décorateur & Organisateur d'évènements</h2>
				
				@endif
				
				<div class="text-left">
					<!-- Bouton Like de Janess -->
					<div class="fb-like" data-href="https://www.facebook.com/janesstraiteurafricain/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
				</div>
			</div>
			<!--  Contenu-->
			@yield('contenu')
			
        </div>
        
        <!-- Footer-->
		<div class="footer">	
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h3 class="title">Informations</h3>
						<ul>
							<li>{{ HTML::linkRoute('services', 'Services') }}</li>
							<li>{{ HTML::linkRoute('specialites', 'Spécialités') }}</li>
							<li>{{ HTML::linkRoute('prestations', 'Prestations') }}</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid ctact-grid">
						<h3 class="title">Découvrir</h3>
						 <ul>
							<li>{{ HTML::linkRoute('home', 'Accueil') }}</li>
							<li>{{ HTML::linkRoute('photos', 'Photos') }}</li>
							<li>{{ HTML::linkRoute('references', 'Références') }}</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid ctact-grid">
						<h3 class="title">Joindre</h3>
						<ul>
							<li>{{ HTML::linkRoute('contact', 'Contact') }}</li>
							<li>{{ HTML::linkRoute('livre_dor', "Livre d'or" ) }}</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid contact-grid">
							<h3 class="title">Contact</h3>
							<ul>
								<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Janess Traiteur Africain.</li>							
								<li class="adrs">105 bd de Strasbourg <br>94130 Nogent Sur Marne</li>
								<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>06.21.82.77.20 </li>
								<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com">janesstraiteurafricain@yahoo.fr</a></li>
							</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="copy">
			<div class="container">
				<p>Copyright © 2016 Janess Traiteur Africain.</p>
				<div class="social-icons">
					<ul>
						<li><a href="#" class="fb"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#" class="gg"></a></li>
						<li><a href="#" class="pn"></a></li>					
					</ul>	
				</div>
			</div>
		</div>
		<!--//footer-->

        <!-- JQuery -->
        {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') }}

        <!-- Js Bootstrap -->
        {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') }}
        
         <!-- sidebar scrollspy -->
         {{ HTML::script('js/sidebar_scrollspy.js') }} 
         
         <!-- Google Analytics -->
         <script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-51207587-4', 'auto');
			  ga('send', 'pageview');

		</script>
        
        <!-- Slideshow accueil-->
		@if(Request::path() === '/') 
		
			{{ HTML::script('js/jssor.slider.mini.js') }}
		
			{{ HTML::script('js/jssor.slideshow_accueil.js') }}
			{{ HTML::script('js/jssor.caroussel_accueil.js') }}
		
		@endif
		
		<!-- Page contact -->
		@if(Request::path() === 'contact')
		
		<!-- JQuery UI-->
        {{ HTML::script("//code.jquery.com/ui/1.11.4/jquery-ui.js") }}
        {{ HTML::script('js/datepicker-fr.js') }}

			<!-- Google maps API -->
			<script src="https://maps.googleapis.com/maps/api/js"></script>

			<script>

			  	function initialize() {

			    	var mapCanvas = document.getElementById('map-canvas');

			    	var myLatlng = new google.maps.LatLng(48.841581, 2.482913);

			    	var mapOptions = {
			      		center: myLatlng,
			      		zoom: 13,
			      		mapTypeId: google.maps.MapTypeId.ROADMAP
			    	}
			    
			    	var map = new google.maps.Map(mapCanvas, mapOptions);

			    	var marker = new google.maps.Marker({

				      	position: myLatlng,
				      	map: map,
				      	title: 'Nous somme ici'
				  	});
			  	}

			  	google.maps.event.addDomListener(window, 'load', initialize);
			</script>
			
			<! -- Datepicker -->
			<script>
				$(function() {
					$( "#datepicker" ).datepicker();
				  });
			</script>
		
		@endif

		<!-- Page contact -->
		@if(Request::path() === 'references')
		
			<!-- pageflip -->
			{{ HTML::script('js/turn_js/turn.js') }} 
			
			<script type="text/javascript">

				$(window).ready(function() {
					$('#magazine').turn({
										display: 'double',
										acceleration: true,
										gradients: !$.isTouch,
										elevation:50,
										when: {
											turned: function(e, page) {
												/*console.log('Current view: ', $(this).turn('view'));*/
											}
										}
									});
				});
				
				
				$(window).bind('keydown', function(e){
					
					if (e.keyCode==37)
						$('#magazine').turn('previous');
					else if (e.keyCode==39)
						$('#magazine').turn('next');
						
				});
			</script>
		@endif
		
		<!-- Page contact -->
		@if(Request::path() === 'photos')
		
			<!-- Photoswipe -->
			{{ HTML::script('js/klass.min.js') }} 
			<script type="text/javascript" src="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.js"></script>
			{{ HTML::script('js/code.photoswipe.jquery-3.0.4.min.js') }}
			
			<script type="text/javascript">
	
				(function(window, $, PhotoSwipe){
			
					$(document).ready(function(){
				
						$("#gallery a").photoSwipe({
							
							enableMouseWheel: false,
							enableKeyboard: false
						});
					});
				}(window, window.jQuery, window.Code.PhotoSwipe));
	
			</script>
		
		@endif

    </body>
</html>

