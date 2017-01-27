<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title>Janess Administration - @yield('titre')</title>
		
		<!-- Style perso-->
		{{ HTML::style('css/style_auth.css') }}
		
		{{ HTML::style('//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,700,600italic,700italic') }}
		
		{{ HTML::style('//fonts.googleapis.com/css?family=Syncopate:400,700') }}
	</head>

	<body>
		
		<!--  Contenu-->
		@yield('contenu')
		
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				
			function hideURLbar(){ window.scrollTo(0,1); } 
		</script>

	</body>

</html> 
