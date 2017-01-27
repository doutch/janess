<!-- Carroussel-->
<div class = 'row'>
	
	<div class = 'col-md-3'>
		<div class = 'desc2'>
			<h2>Galerie photo</h2>
			<div class = "widget-title-bar"></div>
			<div class = 'clear'></div>
		</div>
		<br>
		<br>
		<p>N'hésitez pas à découvrir un apercu de nos différents plats ainsi que les différentes prestations que nous avons mises en place.</p>
		<br>
		
	</div>
	
	<div class = 'col-md-9'>
		<div id="carroussel1_container" style="position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.8)">

			<!-- Loading Screen -->
			<div u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
				<div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
					top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
			</div>

			<!-- Slides Container -->
			<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 809px; height: 150px; overflow: hidden;">
				<div>
					{{ HTML::image('img/accueil/carroussel/IMG_0016.JPG') }}
				</div>

				<div>
					{{ HTML::image('img/accueil/carroussel/IMG_0041.JPG') }}
				</div>
				
				<div>
					{{ HTML::image('img/accueil/carroussel/DSC_0776.jpg') }}
				</div>
				
				<div>
					{{ HTML::image('img/accueil/carroussel/IMG_0239.JPG') }}
				</div>
				
				<div>
					{{ HTML::image('img/accueil/carroussel/DSC_0844.jpg') }}
				</div>
				<div>
					{{ HTML::image('img/accueil/carroussel/DSC_0909.jpg') }}
				</div>
				<div>
					{{ HTML::image('img/accueil/carroussel/DSC_0781.jpg') }}
				</div>
				<div>
					{{ HTML::image('img/accueil/carroussel/IMG_4945.JPG') }}
				</div>
			</div>
		</div>
		
		<a href="{{ URL::to('/photos') }}" class="bouton_voir_plus">Voir plus</a>
	</div>

</div>
