@extends('templates/template_main')

@section('titre')

    Livre d'or - Insérer un message

@stop

@section('titre_contenu')
	
	Livre d'or 
	
@stop

@section('image_header')

	{{ HTML::image('img/livre_dor/signature-mariage.jpg','janess-traiteur- livre-dor-header ',array('class' => 'img-responsive img_shadow_header')) }}

@stop

	
@section('contenu')

	<div class = 'row'>
	
		<div class='col-md-6 col-md-offset-3'>
					
			<div class = 'box_specialites_wrapper'>
				
				<div class = 'box_specialites_accueil'>
					
					<p>Merci pour votre visite.</p>
					
					<p>Vous avez un témoignage, des compliments, critiques,  souhaits ou des améliorations à apporter…votre message est le bienvenu !</p>
					
					<a href="{{ URL::to('/create_comment') }}" class="bouton_voir_plus">Laisser un message</a>
				
				</div>
			</div>
			
		</div>
		
	</div>
	
	@foreach ($comments as $comment)
   
		<div class = 'row'>
			
			<div class='col-md-8 col-md-offset-2'>
				
				<div class = 'box_comments'>
					<div class = 'row'>
						<div class = 'col-md-3'>
							
							<!-- {{ HTML::image('uploads/'.$comment->photo,'janess-traiteur- comment-pic ',array('class' => 'img-responsive')) }} -->
							<img alt="janess-traiteur- comment-pic" src='{{URL::to("/uploads/$comment->photo")}}' class = 'img-responsive img_comment center-block'>
							<p class = 'text-center'>{{  $comment->pseudo }}</p>
						</div>
						
						<div class = 'col-md-9'>
							<blockquote>
								<p class = 'comment_texte'>{{  $comment->text }}</p>
								<footer>{{  date('d F Y', strtotime($comment->created_at)) }}</footer>
							</blockquote>
						</div>
					</div>
				</div>
				
			</div>
		</div>
   
	@endforeach
	
@stop
