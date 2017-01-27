@extends('../templates/template_auth')

@section('titre')

    S'inscrire

@stop

@section('contenu')

	<div class="main">
		<h1>S'inscrire</h1> 
		{{-- Renders the signup form of Confide --}}
		{{ Confide::makeSignupForm()->render(); }} 
	</div>

@stop


