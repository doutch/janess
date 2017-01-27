
@extends('../templates/template_dashboard')

@section('titre')

    Commentaires du livre d'or

@stop

@section('titre_contenu')
	
	Commentaires du livre d'or
	
@stop

	
@section('contenu')

	{{ Form::open(array('route' => 'comment_envoye','class' => 'form')) }}

		<div id = "page-wrapper" style = "min-height:585px;">
			
			<div class = 'main-page'>

				<div class = 'tables'>
					
					<h3 class="title1">Liste des commentaires du livre d'or</h3>
					
					<div class = "panel-body widget-shadow">

						<table class = 'table'>
							<thead>
								<tr>
									<td>Pseudo</td>
									<td>Email</td>
									<td>Texte</td>
									<td>Photo</td>
									<td>Date de création</td>
									<td>Date de mise à jour</td>
									<td>Validité</td>
								</tr>
							</thead>
						
							@foreach ($comments as $comment)
						   
								<tr>
									<td>{{ $comment->pseudo }}</td>
									<td>{{ $comment->email }}</td>
									<td>{{ $comment->text }}</td>
									<td>{{ $comment->photo }}</td>
									<td>{{ date('d F Y - H:i:s', strtotime($comment->created_at)) }}</td>
									<td>{{ date('d F Y - H:i:s', strtotime($comment->updated_at)) }}</td>
									<td>
										{{ Form::select($comment->id, [
										   0 => 'Non',
										   1 => 'Oui'],
										   $comment->valide
										) }}
									</td>
									
								</tr>
						   
							@endforeach
						
						</table>
						
						{{ Form::submit('Enregistrer') }}
					</div>
				</div>
			</div>
			
		</div>
	
		

	{{ Form::close() }}
	
@stop
