@extends('templates/template_main')

@section('titre')

    Références

@stop


@section('contenu')

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
	
@stop
