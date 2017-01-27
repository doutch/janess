@extends('templates/template_main')

@section('titre')

    Services

@stop


@section('image_header')

	{{HTML::image('img/prestations/DSC_0916.JPG','janess-traiteur- prestations-header ',array('class' => 'img-responsive img_shadow_header')) }}

@stop

@section('titre_contenu')
	Prestations
@stop

@section('contenu')

	<div class = 'container'>
		
		<div class="row">
			
			<br>
			
			<div class = 'col-sm-3'>
			
				{{HTML::image('img/prestations/vin_honneur.jpg','janess-traiteur- prestations ',array('class' => 'img-responsive img_shadow')) }}
				
			</div>
			
			<div class = 'col-sm-9'>
				
				<p>Avec <b>JANESS Traiteur Africain</b> vous avez le choix entre nous confier toute l'organisation de votre r&eacute;ception ou une partie, nous voulons avant tout respecter votre budget.</p>
				
				<p>C'est avec le plus grand soin et respect que nous planifierons avec vous chaque d&eacute;tail de ce jour si important.</p>
				
				<p>"Quel que soit l'&eacute;v&eacute;nement, la f&ecirc;te commencera avec une mise en place tr&egrave;s &eacute;l&eacute;gante et soign&eacute;e."</p>
				
				<blockquote>"Nous r&eacute;aliserons pour vous et vos invit&eacute;s une soir&eacute;e inoubliable, nous ferons de cette occasion un jour parfait et uniques".</blockquote>
			</div>
			
		</div>
		
		<hr>
		
		<div class="row">
			
			<div class = 'col-sm-9'>
				
				<h2 class = 'text-center'>D&eacute;gustations</h2>
				
				<p class = 'text-center'>Afin de vous aider &agrave; faire votre choix, <b>JANESS Traiteur Africain</b> organise pour vous sur demande des d&eacute;gustations sur rendez-vous &agrave; domicile.</p>
			
				<h2 class = 'text-center'>Vin d'honneur</h2>
				
				<p class = 'text-center'>Le traiteur peut prendre en charge l'accueil de vos invit&eacute;s en leurs proposant des petits fours (8 petits fours/pers sal&eacute;s et sucr&eacute;s).</p>
				
				<p class = 'text-center'>Afin de rendre unique ce jour, commencez par arroser vos convives avec des cocktails avec ou sans alcools.</p>
			</div>
			
			<div class = 'col-sm-3'>
			
				{{HTML::image('img/prestations/19.jpg','janess-traiteur- prestations_Degustation ',array('class' => 'img-responsive img_shadow')) }}
				
			</div>
		</div>
		
		<div class="row">
				
			<h2 class = 'text-center'>Repas - Dessert</h2>
			
			<p class = 'text-center'>Nous vous proposons plusieurs formules qui pourront vous convenir:</p>
			
		</div>	
		
		<div class="row">
			
			<div class = 'col-sm-4'>
				
				{{HTML::image('img/prestations/42.jpg','janess-traiteur- prestations_formule_buffet ',array('class' => 'img-responsive img_shadow')) }}
				
			</div>
			
			<div class = 'col-sm-8'>
			
				<h3>Nos formules en buffet:</h3>
				
				<ul>
					<li><b>Formule Emeraude</b> : Assortiment entr&eacute;es + 10 plats au choix.</li>
					<li><b>Formule Perle</b> : Assortiment entr&eacute;es + 8 plats au choix.</li>
					<li><b>Formule Cristal</b> : Assortiment entr&eacute;es + 6 plats au choix</li>
					<li><b>Formule Coton (enfant - de 10 ans)</b> : 1 entr&eacute;e + 1 plats + vaisselle et d&eacute;coration jetable.</li>
					<li><b>Formule Cocktail</b> : 20 amuses bouches ou verrines chaudes et froides (sal&eacute;s et Sucr&eacute;s)/pers.</li>
					<li><b>Formule Brunch </b>: 25 euros/pers. Pour cette formule 3h de service en buffet avec vaisselle jetable. Viennoiseries + boisson chaude et froide + 6 plats au choix</li>
				</ul>
			</div>
			
			<div class = 'col-sm-12'>
				<p><b>Ex : </b>Poulet au four = 1 plat.Poulet au four + Riz = 2 plats.</p>
				<p><b>A savoir</b> : 4 serveurs pour 100 invit&eacute;s, 8 serveurs pour 200 invit&eacute;s, 11 serveurs pour 300 invit&eacute;s et 14 serveurs pour 400 invit&eacute;s.</p>
			</div>
		</div>	
		
		<div class="row">
			
			<div class = 'col-sm-4'>
				
				{{HTML::image('img/prestations/51.jpg','janess-traiteur- prestations_formule_table ',array('class' => 'img-responsive img_shadow')) }}
				
			</div>
		
			<div class = 'col-sm-8'>
		
				<h3>Nos formules &agrave; table:</h3>
				
				<ul>
					<li><b>Formule Nacre (&agrave; l'assiette)</b> : 1 entr&eacute;e + 3 plats au choix.</li>
					<li><b>Formule Prestige (&agrave; l'assiette)</b> : 1 entr&eacute;e + 3 plats au choix dans les sp&eacute;cialit&eacute;s de la s&eacute;lection formule prestige.</li>
					<li><b>Formule d'Or (sur plateau)</b> : entr&eacute;e + 4 plats au choix.</li>
				</ul>
				
			</div>
			
		</div>
			
		<div class="row">
		
			<div class = 'col-sm-6'>
				<h3>Formule mixte</h3>
				<p>l'entr&eacute;e servie &agrave; l'assiette ou en plateau + 6 plats au choix en buffet.</p>
			</div>
			
			<div class = 'col-sm-6'>
				<h3>Formule en livraison</h3>
				<p>Tarif &agrave; partir de 40 personnes (commander au moins 4 plats).</p>
			</div>
		</div>
		
	
		<hr>
			
		<div class="row">
				
			<h2 class = 'text-center'>D&eacute;coration.</h2>
			
			<div class = 'col-sm-9'>
				<p>Pour &ecirc;tre inoubliable, la f&ecirc;te doit &ecirc;tre parfaite elle s'accompagne donc de la mise en place de la salle, les centres de tables, les bougies, fleurs artificielles, marque tables et la d&eacute;coration du coin mari&eacute;s.</p>
				
				<p>Pour une meilleure personnalisation de votre r&eacute;ception pr&eacute;voir en plus : des grands voilages, grandes pi&egrave;ces de d&eacute;coration, housses de chaises, tr&ocirc;ne mari&eacute;s, fleurs naturelles, &eacute;ditions menus ....</p>
			</div>
			
			<div class = 'col-sm-3'>
				{{HTML::image('img/prestations/DSC_0844.jpg','janess-traiteur- prestations ',array('class' => 'img-responsive img_shadow')) }}
			</div>
		</div>	
		
		<div class="row">
			<h2 class = 'text-center'>Vaisselle - Mobilier.</h2>
			
			<p class = 'text-center'>Un service complet : (assiettes plates et dessert + verres + fourchettes + petite et grosse cuill&egrave;res).</p>
			
			<p class = 'text-center'><b>A noter : </b> En cas de besoin le traiteur fourni le mobilier (ch&egrave;que de caution demand&eacute;).</p>
		</div>
	</div>
    
@stop
