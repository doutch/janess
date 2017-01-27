<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title>Janess Dashboard - @yield('titre')</title>
		
		 <!-- Boostrap-->
        {{ HTML::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') }}

        {{ HTML::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css') }}
        
          <!-- Font Awesome -->
        {{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}
		
		<!-- Style perso-->
		{{ HTML::style('css/dashboard/style.css') }}
		{{ HTML::style('css/dashboard/custom.css') }}
		{{ HTML::style('css/dashboard/animate.css') }}
		
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
		
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
