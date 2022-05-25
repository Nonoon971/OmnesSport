<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accueil</title>

	
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="./popup.js" defer>	
	</script>
	<link rel="stylesheet" type="text/css" href="test.css">
	<style type="text/css">
		body
		{
			
		}
		#test:hover ul li
		{
			display: block;
			left: 190px;	
			bottom: 28px;		
		}
		#section h2
		{
			font-size: 40px;
		}
		#contenu
		{
			float: right;
		}
		#texte
		{
			float: left;
			width: 300px;
		}
		#section
		{
			margin-left: 50px;
			font-size: 18px;
			font-family: Georgia, serif;
			
		}
		#evenement
		{
			margin-left: 50px;
			font-size: 18px;
		}
		.spacer 
		{
			clear: both;
			overflow: hidden;
		}
		footer
		{
			background-color: black;
			color: white;
			clear: left;
			text-align: center;
			padding: 10px;
			font-size: 0.6em;

		}
	</style>
	<style >
		.carousel-inner img {
			width: 100%; /* Set width to 100% */
			margin: auto;
			min-height:200px;
		}

		/* Hide the carousel text when the screen is less than 600 pixels wide */
		@media (max-width: 600px) {
			.carousel-caption {
				display: none; 
			}
		</style>

	</head>
	<body>

		<?php include('header.php'); ?>

		<div id="section">

			<!-- Faire un carrousel -->

			<div id="contenu">
				<img src="image1Accueil.png" alt="image medecin" height="320" width="420">
			</div>

			<div id="text">
				<h2>Omnes Sports</h2>

				<p>Bienvenue sur Omnes Sports, la plateforme de consultation sportive en ligne pour la communauté d'Omnes Educations. <br>Ici, les sportifs de tous âges et de tous niveaux confondus pourront prendre rendez-vous, échanger avec un spécialiste de votre choix et le sport de votre choix !</p>
			</div>
		</div>

		<div class="spacer"></div>


		<div id="evenement">
			<h2>Evènement de la semaine:</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">
						<div class="carousel-caption">
							<h3>Sell $</h3>
							<p>Money Money.</p>
						</div>      
					</div>

					<div class="item">
						<img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
						<div class="carousel-caption">
							<h3>More Sell $</h3>
							<p>Lorem ipsum...</p>
						</div>      
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<p>Vous trouverez ici les évènements important de la semaine au sein de notre groupe Omnes mais aussi au niveau du sport mondiale.</p>
		</div>


		<div class="spacer"></div>


		<footer>
			Droit d'auteur | Copyright &copy;2022 Omnes Sport &bull; <a href="mailto:omnes.sport@omneseducation.org">omnes.sport@omneseducation.org</a> &bull; <address><a style="text-decoration: none;" href="https://goo.gl/maps/JV5cmXaqijZvfycG7">37 Quai de Grenelle, Paris 75015</a></address>
		</footer>



	</body>
	</html>