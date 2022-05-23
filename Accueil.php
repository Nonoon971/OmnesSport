<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accueil</title>

	<style type="text/css">
		body
		{
			padding: 0; /*Pour éviter des espaces avec les div*/
			margin: 0;
		}
		h1
		{
			text-align: center;
			font-size: 60px;
			color: black;
		}
		#header
		{
			background-image: url("sport.jpg");
			padding: 10px;
		}
		#nav
		{
			position: fixed;
		}
		#nav ul
		{
			text-align: center;
			margin: 0;
			padding: 0;
			list-style: none; /*Suppression des puces*/
		}
		#nav li
		{
			float: left;
			position: relative;
			color: white;
			background-color: blue;
			font-size: 20px;
			width: 253.2px;
			padding: 10px;
			text-align: center;
		}
		#nav li a
		{
			display: block;
			color: white;
			text-decoration: none;
			text-align: center;
		}
		#nav ul li ul
		{
			display: none; /*On fait disparaitre les sous-menus*/
		}
		#nav li ul
		{
			position: absolute;
			float: right;
		}

		#nav ul li:hover ul
		{
			display: block; 
			
			/*On affiche si la souris passe dessus*/
		}
		#test li
		{
			background-color: black;
		}
		#test ul li
		{
			display: none;
		}
		#test:hover ul li
		{
			display: block;
			left: 263px;	
			bottom: 25px;		
		}
		#nav li:hover ul li
		{
			float: none;
		}
		#nav li a
		{
			text-decoration: none;
		}
	</style>

</head>
<body>

	<div id="header">

		<h1>Omnes Sport</h1>

	</div>

	<div id="nav">

		<ul>
			<li><a href="#">Accueil</a></li>
			<li>Tout Parcourir
				<ul>
					<li id="test">Activités sportives
						<ul>
							<li><a href="musculation.html">Musculation</a></li>
							<li><a href="fitness.html">Fitness</a></li>
							<li><a href="biking.html">Biking</a></li>
							<li><a href="cardio.html">Cardio-Training</a></li>
							<li><a href="collectif.html">Cours Collectifs</a></li>
						</ul>
					</li>
					<li id="test">Les Sports de compétition
						<ul>
							<li><a href="basket.html">Basketball</a></li>
							<li><a href="football.html">Football</a></li>
							<li><a href="rugby.html">Rugby</a></li>
							<li><a href="tennis.html">Tennis</a></li>
							<li><a href="natation.html">Natation</a></li>
							<li><a href="plongeon.html">Plongeon</a></li>
						</ul>
					</li>
					<li><a href="salle.html">Salle de sport Omnes</a></li>
				</ul>
			</li>
			<li><a href="recherche.html">Recherche</a></li>
			<li>Rendez-vous</li>
			<li>Votre Compte</li>

		</ul>
		
	</div>

	<div id="section">
		

	</div>


</body>
</html>