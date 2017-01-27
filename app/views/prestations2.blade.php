@extends('templates/template_main')

@section('titre')

    Services

@stop

@stop

@section('image_header')

	{!! HTML::image('img/prestations/DSC_0916.JPG','janess-traiteur- prestations-header ',array('class' => 'img-responsive img_shadow')) !!}

@stop

@section('contenu')

	<div class = 'container'>
		
		<div class="row">
			
			<div class="col-md-3" id="leftCol">
				
				<ul class="nav nav-stacked" id="sidebar">
				  <li><a href="#sec_degustation">Dégustation</a></li>
				  <li><a href="#sec_vin">Vin d'honneur</a></li>
				  <li><a href="#sec_repas">Repas - Dessert</a></li>
				  <li><a href="#sec_decoration">Décoration</a></li>
				  <li><a href="#sec_vaisselle">Vaisselle - Mobilier</a></li>
				</ul>
			
			</div>
			
			<div class="col-md-9">

				<h1>Prestations</h1>
				
				<p>Avec <b>JANESS Traiteur Africain</b> vous avez le choix entre nous confier toute l'organisation de votre réception ou une partie, nous voulons avant tout respecter votre budget.</p>
				
				<p>C'est avec le plus grand soin et respect que nous planifierons avec vous chaque détail de ce jour si important.</p>
				
				<p>Nous réaliserons pour vous et vos invités une soirée inoubliable, nous ferons de cette occasion un jour parfait et unique.</p>
				
				<p>Quel que soit l'événement, la fête commencera avec une mise en place très élégante et soignée. é</p>
				
				<h2 id = 'sec_degustation'>Dégustations</h2>
				
				<p>Afin de vous aider à faire votre choix, JANESS Traiteur Africain organise pour vous sur demande des dégustations sur rendez-vous à domicile.</p>
				
				<h2 id = 'sec_vin'>Vin d'honneur</h2>
				
				<p>Le traiteur peut prendre en charge l'accueil de vos invités en leurs proposant des petits fours (8 petits fours/pers salé et sucré).</p>
				
				<p>Afin de rendre unique ce jour, commencez par arroser vos convives avec des cocktails avec ou sans alcools.</p>
				
				<h2 id = 'sec_repas'>Repas - Dessert</h2>
				
				<p>Nous vous proposons plusieurs formules qui pourront vous convenir:</p>
				
				<h3>Nos formules en buffet:</h3>
				
				<ul>
					<li>Formule Emeraude : Assortiment entrées + 10 plats au choix.</li>
					<li>Formule Perle : Assortiment entrées + 8 plats au choix.</li>
					<li>Formule Cristal : Assortiment entrées + 6 plats au choix</li>
					<li>Formule Coton (enfant – de 10 ans) : 1 entrée + 1 plats + vaisselle et décoration jetable.</li>
					<li>Formule Cocktail : 20 amuses bouches ou verrines chaudes et froides (salés et Sucrés)/pers.</li>
					<li>Formule Brunch : 25 euros/pers. Pour cette formule 3h de service en buffet avec vaisselle jetable. Viennoiseries + boisson chaude et froide + 6 plats au choix</li>
				</ul>
				
				<p>Ex : Poulet au four = 1 plat.</p>
				<p>Poulet au four + Riz = 2 plats.</p>
				<p>A savoir : 4 serveurs pour 100 invités, 8 serveurs pour 200 invités, 11 serveurs pour 300 invités et 14 serveurs pour 400 invités.</p>
				
				<h3>Nos formules à table:</h3>
				
				<ul>
					<li>Formule Nacre (à l’assiette) : 1 entrée + 3 plats au choix.</li>
					<li>Formule Prestige (à l’assiette) : 1 entrée + 3 plats au choix dans les spécialités de la sélection formule prestige.</li>
					<li>Formule d’Or (sur plateau) : entrée + 4 plats au choix.</li>
				</ul>
				
				<p>Formule mixte : l’entrée servie à l’assiette ou en plateau + 6 plats au choix en buffet.</p>
				
				<p>Formule en livraison : Tarif à partir de 40 personnes (commander au moins 4 plats).</p>
				
				<h2 id='sec_decoration'>Décoration.</h2>
				
				<p>Pour être inoubliable, la fête doit être parfaite elle s’accompagne donc de la mise en place de la salle, les centres de tables, les bougies, fleurs artificielles, marque tables et la décoration du coin mariés.</p>
				
				<p>Pour une meilleure personnalisation de votre réception prévoir en plus : des grands voilages, grandes pièces de décoration, housses de chaises, trône mariés, fleurs naturelles, éditions menus ....</p>
				
				<h2 id='sec_vaisselle'>Vaisselle - Mobilier.</h2>
				
				<p>Un service complet : (assiettes plates et dessert + verres + fourchettes + petite et grosse cuillères).</p>
				
				<p><b>A noter : </b> En cas de besoin le traiteur fourni le mobilier (chèque de caution demandé).</p>
			</div>
		</div>
	</div>
    
@stop
