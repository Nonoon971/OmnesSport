<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Activités sportives</title>
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
		#section
		{
			float: right;
			font-size: 18px;
			font-family: Georgia, serif;
			
		}
		#rightcolumn
		{
			position: fixed;
			width: 20px;
			margin: 0;
			padding: 0;

		}
		#rightcolumn ul
		{
			list-style: none;
			font-size: 18px;
			font-style: oblique;
			font-weight: bold;

		}
		#rightcolumn a
		{
			text-decoration: none;
			color: black;
		}
		#section a
		{
			text-decoration: none;
			color: black;
		}
		#rightcolumn li 
		{
			height: 50px;
			
		}
		img
		{
			width: 200px;
		}
		img:hover
		{
			opacity: 0.9;
		}
	</style>
</head>
<body>

	<?php include('header.php'); ?>

	<div id="rightcolumn">
		<ul>
			<li><a href="#muscu">Musculation</a></li>
			<li><a href="#fitness">Fitness</a></li>
			<li><a href="#biking">Biking</a></li>
			<li><a href="#cardio">Cardio-Training</a></li>
			<li><a href="#collectif">Cours Collectifs</a></li>
		</ul>
	</div>

	<div id="section">
		
		<p>
			Voici toutes les activités que vous pouvez pratiquer au sein de notre groupe Omnes sport avec nos coachs qui se feront un plaisir de vous accompagner.<br>
			Choisissez le sport de votre choix selon vos goûts et vos capacités.
		</p>

		<hr>
		<div id="muscu">
			<h2><a href="musculation.php">Musculation</a></h2>
			<p>
				Afin de sculpter sa silhouette à son rythme et à son goût. Développer votre masse musculaire.
			</p>
			<img src="abdo.jpeg" alt="abdo">
			<img src="abdo2.jpg">
			<img src="abdo3.jpg">
			<p>
				<a style="color: blue;" href="musculation.php">Découvrez notre coach et ses disponibilités ici</a>
			</p>
			<br><br>

		</div>
		<hr>
		<div id="fitness">
			<h2><a href="fitness.php">Fitness</a></h2>
			<p>
				Le fitness est différent de la musculation. Elle regroupe plusieurs activité, le cardio, les étirements, le step etc...<br>
				Le but est d'à la fois perdre du poids en travaillant tout le corps, son endurance, son cardio, en se musclant etc...
			</p>
			<img src="fitness.jpg">
			<img src="fitness1.jpg">
			<img src="fitness2.jpg">
			<br><br>

		</div>
		<hr>
		<div id="biking">
			<h2><a href="biking.php">Biking</a></h2>
			<p>
				Je continuerai plus tard<br>
				
			</p>
			<img src="fitness.jpg">
			<img src="fitness1.jpg">
			<img src="fitness2.jpg">
			<br><br>

		</div>

	</div>

</body>
</html>