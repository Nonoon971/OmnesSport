<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accueil</title>

	<link rel="stylesheet" type="text/css" href="test.css">
	<style type="text/css">
		body
		{
			background-color: lightgrey;
		}
		#section h2
		{
			font-size: 40px;
		}
		#contenu
		{
			float: right;
			margin-top: 10px;
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
			background-color: lightgrey;
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

</head>
<body>

	<?php include('header.php'); ?>

	<div id="section">

		<!-- Faire un carrousel -->

		<div id="contenu">
			<img src="image1Accueil.jpg" alt="image medecin" height="350" width="450">
		</div>
		
		<div id="text">
			<h2>Omnes Sports</h2>

			<p>Bienvenue sur Omnes Sports, la plateforme de consultation sportive en ligne pour la communauté d'Omnes Educations. <br>Ici, les sportifs de tous âges et de tous niveaux confondus pourront prendre rendez-vous, échanger avec un spécialiste de votre choix et le sport de votre choix !</p>
		</div>
	</div>

	<div class="spacer"></div>


		<div id="evenement">
			<h2>Evènement de la semaine:</h2>
		</div>

		<div class="spacer"></div>
	

	<footer>
		Droit d'auteur | Copyright &copy;2022 Omnes Sport
	</footer>



</body>
</html>