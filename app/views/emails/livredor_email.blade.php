<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- If you delete this meta tag, Half Life 3 will never be released. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Janess Traiteur Africain - VOtre message pour le livre d'or</title>

{{ HTML::style('css/email.css') }}

</head>
 
<body bgcolor="#FFFFFF">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#907A86">
	<tr>
		<td></td>
		<td class="header container" >
				
				<div class="content">
				<table bgcolor="#FFFFFF">
					<tr>
						<td>{{ HTML::image('img/logo2.png','janess-traiteur- logo ',array('class' => 'img-responsive')) }}</td>
						<td align="right"><h6 class="collapse"></h6></td>
					</tr>
				</table>
				</div>
				
		</td>
		<td></td>
	</tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" bgcolor="#FFFFFF">

			<div class="content">
			<table>
				<tr>
					<td>
						<h3>Bonjour,</h3>
						 <p>Merci de npus avoir laissé un message pour notre livre d'or</p>
						<p>Voici les informations que vous nous avez transmises:</p>
						<ul>
						 
							<li><b>Nom/pseudo</b>: {{ $pseudo }} </li>
							<li><b>Email</b>: {{ $email }}</li>
							<li><b>Message</b>: {{ $texte }}</li>
						</ul>
						<p>Merci pour votre message cela nous encourage au quotidien, nous sommes très touchés par votre marque de soutien.</p>
						<h2>A bientôt !!</h2>
						<br>
						<h2>Janess Traiteur Africain</h2>		
												
						<!-- social & contact -->
						<table class="social" width="100%">
							<tr>
								<td>
									
									<!-- column 2 -->
									<table align="left" class="column">
										<tr>
											<td>				
																			
												<h5 class="">Contact:</h5>												
												<p>Téléphone: <strong>06.21.82.77.20 </strong><br/>
													Adresse: <strong>105 bd de Strasbourg - <br> 94130 Nogent Sur Marne</strong></p>
                
											</td>
										</tr>
									</table><!-- /column 2 -->
									
									<span class="clear"></span>	
									
								</td>
							</tr>
						</table><!-- /social & contact -->
						
					</td>
				</tr>
			</table>
			</div><!-- /content -->
									
		</td>
		<td></td>
	</tr>
</table><!-- /BODY -->

<!-- FOOTER -->
<table class="footer-wrap">
	<tr>
		<td></td>
		<td class="container">
			
				<!-- content -->
				<div class="content">
				<table>
				<tr>
					<td align="center">
					</td>
				</tr>
			</table>
				</div><!-- /content -->
				
		</td>
		<td></td>
	</tr>
</table><!-- /FOOTER -->

</body>
</html>


