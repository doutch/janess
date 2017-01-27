@extends('templates/template_main')

@section('titre')

    Services

@stop

@section('image_header')

	{{ HTML::image('img/specialites/DSC_0938.jpg','janess-traiteur- specialites-header ',array('class' => 'img-responsive img_shadow_header')) }}

@stop

@section('titre_contenu')
	Specialités
@stop

@section('contenu')
	
	<h2 class = 'text-center'>Janess Traiteur est capable de vous cuisiner toutes les spécialités africaines</h2> 
	<h2 class = 'text-center'>Demandez et nous sauront vous satisfaire !</h2>
	<br><br>
	
	<div class="container">
		<div class="row">
			
			<div class="col-md-3" id="mySidebar">
				
				<ul id="myNav" class="nav nav-tabs nav-stacked hidden-xs hidden-sm" data-spy="affix">
				  <li><a href="#sec_entrees">Entrées</a></li>
				  <li><a href="#sec_plats">Plats</a></li>
				  <li><a href="#sec_accompagnement">Accompagnements</a></li>
				  <li><a href="#sec_grillades">Grillades</a></li>
				  <li><a href="#sec_cocktail">Mises en bouche</a></li>
				  <li><a href="#sec_dessert">Dessert</a></li>
				  <li><a href="#sec_enfants">Repas enfants</a></li>
				  <li><a href="#sec_prestige">Formule prestige</a></li>
				</ul>
			
			</div>
			
			<div class="col-md-7 col-md-offset-1">
				<div class = 'box_specialites_wrapper'>
					<div class = 'box_specialites' id="sec_entrees">
						
						<div class = 'img_specialite'>
							{{ HTML::image('img/specialites/IMG_4945.JPG','janess-traiteur- specialites-entrées ',array('class' => 'img-responsive img_shadow img-circle')) }}
						</div>
		
						<h2>Entrées.</h2>
						
						<h4>Afrique et Antilles.</h4>
						
						<ul>
							<li>Accras de thon.</li>
							<li>Boudin blanc à l’antillaise.</li>
							<li>Pâté antillais (bœuf, poulet et crabe).</li>
							<li>Avocat au crabe à l’antillaise.</li>
							<li>Pastel de poisson.</li>
							<li>Samoussa au poulet, bœuf et thon.</li>
							<li>Salade de gésiers pimentée.</li>
							<li>Nems.</li>
							<li>Roulé à la macédoine.</li>
							<li>Avocat au crabe.</li>
							<li>Salade composée à personnaliser.</li>
							<li>Saumon fumé.</li>
							<li>ATomate farcie au thon.</li>
							<li>Plateau de charcuterie (hallal).</li>
							<li>Salade piémontaise.</li>
							<li>Taboulé.</li>
						</ul>
					</div>	
				</div>
				
				<div class = 'box_specialites_wrapper'>
					<div class = 'box_specialites' id="sec_plats">
						
						<div class = 'img_specialite'>
							{{ HTML::image('img/specialites/DSC_0939.jpg','janess-traiteur- specialites-plats ',array('class' => 'img-responsive img_shadow img-circle')) }}
						</div>
					
						<h2>Plats.</h2>
						
						<h4>Afrique</h4>
						
						<ul>
							<li>Saka saka, Pondu.</li>
							<li>Sauce graine, mussaka (poulet, boeuf, poisson ...) .</li>
							<li>Fumbua, Coco.</li>
							<li>Morue, Makayabu.</li>
							<li>Papillote, Liboké (mbika= graines de courge ou poisson).</li>
							<li>Haricot blanc ou rouge, Madessu	.</li>
							<li>Gésiers pimenté.</li>
							<li>Poisson chat ou malangua en bouillon.</li>
							<li>Ngolo ou pangasius.</li>
							<li>Queue de bœuf en bouillon, Mikila .</li>
							<li>Tripe en bouillon, Mabumu.</li>
							<li>Oiselle, Ngaï-ngaï.</li>
							<li>Poulet fumé.</li>
							<li>Safu sel et piment.</li>
							<li>Jardinières de légume (Ngaï-ngaï ou oseilles, épinard, matembele …).</li>
							<li>Ndolé.</li>
							<li>Tiep bou dienn.</li>
							<li>Poulet yassa (olive selon goût).</li>
							<li>Mafé, sauce arachide (poulet ou bœuf).</li>
							<li>Bœuf sauce épinard.</li>
							<li>Légumes à la vapeur.</li>
						</ul>
						
						<hr>
					
						<h4>Antilles</h4>
						
						<ul>
							<li>Lait de coco (poulet, bœuf ou crevettes)</li>
							<li>Sauce curry ou colombo (poulet, bœuf, agneau …)</li>
						</ul>
					
					</div>
				</div>
				
				
				<div class = 'box_specialites_wrapper'>
					<div class = 'box_specialites' id="sec_accompagnement">
						
						<div class = 'img_specialite'>
							{{ HTML::image('img/specialites/DSC05867.JPG','janess-traiteur- specialites-accompagnements ',array('class' => 'img-responsive img_shadow img-circle')) }}
						</div>
						
						<h2>Accompagnements.</h2>
						
						<ul>
							<li>Banane plantain.</li>
							<li>Patate douce, igname.</li>
							<li>Riz blanc, cantonnais ou curry et gingembre.</li>
							<li>Pomme de terre sauté.</li>
							<li>Achard de légume des Iles.</li>
							<li>Chikwang, manioc.</li>
							<li>Gratin de cristophine.</li>
							<li>Attiéké.</li>
							<li>Miondo (bâton de manioc).</li>
							<li>Ablot (pain de maïs).</li>
						</ul>
					</div>
				</div>
				
				<div class = 'box_specialites_wrapper'>
					<div class = 'box_specialites' id="sec_grillades">
						
						<div class = 'img_specialite'>
							{{ HTML::image('img/specialites/DSC05826.JPG','janess-traiteur- specialites-grillades ',array('class' => 'img-responsive img_shadow img-circle')) }}
						</div>
					
						<h2>Grillades.</h2>
						
						<ul>
							<li>Brochette</li>
							<li>Boeuf</li>
							<li>Mouton</li>
							<li>Agneau</li>
							<li>Côte de viande</li>
							<li>Poulet cuisse ou ailes</li>
							<li>Poisson (tilapia, dorade, chinchard)</li>
							<li>Veau, chèvre</li>
						</ul>
						
					</div>
				</div>
				
				<div class = 'box_specialites_wrapper'>
					<div class = 'box_specialites' id="sec_cocktail">
						
						<div class = 'img_specialite'>
							{{ HTML::image('img/specialites/IMG_0041.JPG','janess-traiteur- specialites-cocktails ',array('class' => 'img-responsive img_shadow img-circle')) }}
						</div>
					
						<h2>Mises en bouche et pieces cocktail:</h2>
						
						<p><b>Salées: </b></p>
						
						<ul>
							<li>Verre fraicheur avocat crevette.</li>
							<li>Verrine de thon.</li>
							<li>Verrine de saumon.</li>
							<li>Cake salé.</li>
							<li>Croustillant de crevette (pomme de terre).</li>
							<li>Toast de mbika (graine de courge).</li>
							<li>Brochette apéritif : abricot-pomme-chèvre ….</li>
							<li>Roulées à la saucisse.</li>
							<li>Samoussa bœuf, thon et poulet.</li>
							<li>Canapé douceur, mini burger et hot dog.</li>
							<li>Tapas ou bruschetta.</li>
							<li>Pic plantain bacon.</li>
							<li>Pastel.</li>
							<li>Mini brochette bœuf poulet.</li>
							<li>Aile de poulet.</li>
							<li>Assortiments mini tartelettes (quiche, pizza, saumon, fromage …).</li>
						</ul>
						
						<hr>
						
						<p><b>Sucrées: </b></p>
						
						<ul>
							<li>Verre fraicheur mangue citron vert et coco.</li>
							<li>Beignet à la congolaise.</li>
							<li>Macarons.</li>
							<li>Mini pâtisseries.</li>
							<li>Verrine de fruit exotique.</li>
						</ul>
						
					</div>
				</div>
				
				<div class = 'box_specialites_wrapper'>
					<div class = 'box_specialites' id="sec_dessert">
						
						<div class = 'img_specialite'>
							{{ HTML::image('img/specialites/IMG_5007.JPG','janess-traiteur- specialites-dessert ',array('class' => 'img-responsive img_shadow img-circle')) }}
						</div>
					
						<h2>Desserts: </h2>
						
						<ul>
							<li>Beignet nature.</li>
							<li>Beignet à la banane.</li>
							<li>Salade de fruits exotique.</li>
							<li>Banane plantain poêlée et son chocolat à l’orange.</li>
							<li>Mangue citron vert et coco.</li>
							<li>Plateau de fruits de saison.</li>
							<li>Brochettes de fruits sauce chocolat.</li>
							<li>Mini pâtisseries.</li>
							<li>Mini mousse au chocolat.</li>
						</ul>
						
					</div>
				</div>
				
				<div class = 'box_specialites_wrapper'>
					<div class = 'box_specialites' id="sec_enfants">
						
						<div class = 'img_specialite'>
							{{ HTML::image('img/specialites/IMG_0003.JPG','janess-traiteur- specialites-plats-enfants ',array('class' => 'img-responsive img_shadow img-circle')) }}
						</div>
					
						<h2>Repas enfants: </h2>
					
						<ul>
							<li>Burgers.</li>
							<li>Sandwich.</li>
							<li>Boulettes.</li>
							<li>Frites.</li>
							<li>Banane plantain.</li>
							<li>Pizza.</li>
							<li>Salade de riz.</li>
							<li>Poulet.</li>
						</ul>
					
					</div>
				</div>
				
				<div class = 'box_specialites_wrapper'>
					<div class = 'box_specialites' id="sec_prestige">
						
						<div class = 'img_specialite'>
							{{ HTML::image('img/specialites/IMG_4984.JPG','janess-traiteur- specialites-prestige ',array('class' => 'img-responsive img_shadow img-circle')) }}
						</div>
					
						<h2>Sélection Formule Prestige: </h2>
						
						<p><b>Entrée: </b></p>
						
						<ul>
							<li>Millefeuille de tomate mozzarella et saumon.</li>
							<li>Carpaccio de melon basilic jambon cru et croustillant au paprika.</li>
							<li>Tartare d’avocat tomate sur cocktail de crevette.</li>
							<li>Salade gourmande de foie gras.</li>
						</ul>
						
						<hr>
						
						<p><b>Plats: </b></p>
						
						<ul>
							<li>Roti de veau.</li>
							<li>Caille ou pintade sauce champignon .</li>
							<li>Pavé de bœuf.</li>
							<li>Brochette d’agneau  avec son fagot d’haricot vert et riz blanc ou gratin dauphinois ou pomme duchesse.</li>
							<li>Filet de dorade sur un lit de petit légume et riz blanc.</li>
							<li>Purée de patate douce.</li>
						</ul>
						
						<hr>
						
						<p><b>Dessert: </b></p>
						
						<ul>
							<li>Palette de fruit et son coulis gourmand.</li>
							<li>Petite verrine de mangue et coulis exotique.</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
    
@stop
