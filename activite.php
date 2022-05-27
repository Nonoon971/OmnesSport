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
	<link rel="stylesheet" type="text/css" href="csspopup.css">

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

		#section2
		{
			float: left;
			width: 800px;
			margin-left: 30px;
			margin-top: 30px;
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
		.row.content {height: 450px}

		/* Set gray background color and 100% height */
		.sidenav {
			padding-top: 20px;
			background-color: grey;
			height: 450%;
		}
		.sidenav2 {
			padding-top: 20px;
			background-color: grey;
			float: right;
			height: 450%;
		}
	</style>
</head>
<body>

	<?php include('header.php'); ?>

	

	<div class="container-fluid">    
		<div class="row content">
			<div class="col-sm-2 sidenav">
				<div id="rightcolumn">
					<ul>
						<li><a href="#muscu">Musculation</a></li>
						<li><a href="#fitness">Fitness</a></li>
						<li><a href="#biking">Biking</a></li>
						<li><a href="#cardio">Cardio-Training</a></li>
						<li><a href="#collectif">Cours Collectifs</a></li>
					</ul>
				</div>
			</div>
			<div id="section2">
				<div id="section">

					<p>
						Voici toutes les activités que vous pouvez pratiquer au sein de notre groupe Omnes sport avec nos coachs qui se feront un plaisir de vous accompagner.<br>
						Choisissez le sport de votre choix selon vos goûts et vos capacités.
					</p>

					<hr>
					<div id="muscu">
						<h2>Musculation</h2>
						<p>
							Afin de sculpter sa silhouette à son rythme et à son goût. Développer votre masse musculaire.
						</p>
						<img src="abdo.jpeg" alt="abdo">
						<img src="abdo2.jpg">
						<img src="abdo3.jpg">
						<p>
							<?php include('popupmuscu.php'); ?>
						</p>
					</div>

					<hr>
					<div id="fitness">
						<h2>Fitness</h2>
						<p>
							Le fitness est différent de la musculation. Elle regroupe plusieurs activités, le cardio, les étirements, le step etc...<br>
							Le but est d'à la fois perdre du poids en travaillant tout le corps, son endurance, son cardio, en se musclant etc...
						</p>
						<img src="fitness.jpg">
						<img src="fitness1.jpg">
						<img src="fitness2.jpg">
						<p>
							<?php include('popupfitness.php'); ?>
						</p>

					</div>
					<hr>
					<div id="biking">
						<h2>Biking</h2>
						<p>
							Faisons du vélo en salle ! Un peu comme du cyclisme mais sur un vélo fixe, venez travailler votre cardio et votre physique avec nos vélo de biking. Vous éprouverez les mêmes sensations qu'un vélo de route<br>

						</p>
						<img src="biking.jpg">
						<img src="biking1.jpg">
						<img src="biking3.jpg">
						<p>
							<?php include('popupbiking.php'); ?>
						</p>

					</div>

					<hr>
					<div id="cardio">
						<h2>Cardio-Training</h2>
						<p>
							Le cardio-training, comme son nom l'indique permet de travailler le cardio. En augmentant progressivement l'intensité, on essaye de vous faire contrôler votre fréquence cardiaque. Cela vous permettra d'améliorer la performance de votre coeur.<br>

						</p>
						<img src="cardio.jpeg">
						<img src="cardio1.jpg">
						<img src="cardio2.jpg">
						<p>
							<?php include('popupcardio.php'); ?>
						</p>

					</div>

					<hr>
					<div id="collectif">
						<h2>Cours Collectifs</h2>
						<p>
							Vous préférez pratiquer en groupe, en famille, entre amis ? Ce cours est fait pour vous ! Zumba, Yoga, step etc... De nombreuses séances et d'activités collectives sont programmées par notre coach pour vous motiver.<br>

						</p>
						<img src="collectif.jpg">
						<img src="collectif1.png">
						<img src="collectif2.jpg">
						<p>
							<?php include('popupcollectif.php'); ?>
						</p>

					</div>
					<hr>

				</div>
			</div>
			<div class="col-sm-2 sidenav2">
			</div>
		</div>
	</div>
		<?php include('footer.php'); ?>

</body>
</html>