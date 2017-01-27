<!-- Slideshow_accueil-->
	<div id="slider1_container" style="position: relative; width: 1920px;height: 650px;float:right;box-shadow: 0px 0px 8px 2px rgba(119, 119, 119, 0.75); margin-bottom:30px;">

		<!-- Loading Screen -->
		<div u="loading" style="position: absolute; top: 0px; left: 0px;">
			<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;"></div>
			<div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		</div>

		<!-- Slides Container -->
		<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1920px;height: 650px; overflow: hidden;">
			<div>
				{{ HTML::image('img/accueil/slideshow/DSC_0836.jpg') }}
			</div>

			<div>
				{{ HTML::image('img/accueil/slideshow/DSC_0905.jpg') }}
			</div>
			
			<div>
				{{ HTML::image('img/accueil/slideshow/IMG_4984.jpg') }}
			</div>
			
			<div>
				{{ HTML::image('img/accueil/slideshow/DSC_0793.jpg') }}
			</div>
			
			<div>
				{{ HTML::image('img/accueil/slideshow/IMG_4992.JPG') }}
			</div>

		</div>

		<!-- bullet navigator container -->
		<div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
			<!-- bullet navigator item prototype -->
			<div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
		</div>
		<!-- Bullet Navigator Skin End -->

		<!-- Arrow Left -->
		<span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
		</span>
		<!-- Arrow Right -->
		<span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
		</span>

	<!-- Jssor Slider End -->
	</div>
