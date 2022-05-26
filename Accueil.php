<?php session_start() ?>
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
			margin-left: 20px;
			font-size: 18px;
			font-family: Georgia, serif;
			
		}
		#evenement
		{
			margin-left: 20px;
			font-size: 18px;
		}
		#section2
		{
			float: left;
			width: 800px;
		}
		.spacer 
		{
			clear: both;
			overflow: hidden;
		}
		
	</style>
	<style >
		.carousel-inner img {
			width: 100%; /* Set width to 100% */
			margin: 0;
			min-height:300px;
		}
		.row.content {height: 450px}

		/* Set gray background color and 100% height */
		.sidenav {
			padding-top: 20px;
			background-color: grey;
			height: 200%;
		}
		.sidenav2 {
			padding-top: 20px;
			background-color: grey;
			float: right;
			height: 200%;
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
		<div class="container-fluid text-center">    
			<div class="row content">
				<div class="col-sm-2 sidenav">
				</div>
				<div id="section2">
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
									<img src="evenement1.png" alt="Image" height="300" width="300">
									<div class="carousel-caption">
										<h3>World Cup FIBA</h3>
										<p>Women's basketball world cup.</p>
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
				</div>
				<div class="col-sm-2 sidenav2">
				</div>
			</div>
		</div>


		<div class="spacer"></div>

		<?php include('footer.php'); ?>

		
</body>
</html>
