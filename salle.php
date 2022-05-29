<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Salle de sports Omnes</title>
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
	

	<script src="./popup.js" defer>	
	</script>
	<style type="text/css">
		#test:hover ul li
		{
			display: block;
			left: 190px;	
			bottom: 28px;		
		}
		.sidenav {
			padding-top: 20px;
			background-color: grey;
			height: 1000px;
		}
		.sidenav2 {
			padding-top: 20px;
			background-color: grey;
			float: right;
			height: 1000px;
		}
		#section2
		{
			float: left;
			width: 800px;
			margin-left: 30px;
			margin-top: 30px;
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
		#rightcolumn li 
		{
			height: 50px;
			
		}
		.spacer 
		{
			clear: both;
			overflow: hidden;
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
						<li><a href="#Coordonnees">Nos coordonnées</a></li><br>
						<li><a href="#Services">Nos services</a></li>
					</ul>
				</div>
			</div>
			<div id="section2">

				<h2><b>Notre salle de sports Omnes Sport !</b></h2><br>

				<div id="Coordonnees">

					<h3 style="color: red; margin-left: 20px;"><b>&bull; Nos coordonnées</b></h3>
					<div style="float: right;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2625.3227869951947!2d2.2818962!3d48.8520549!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67004a52552e3%3A0x47d6b1ac0c239d3c!2s37%20Quai%20de%20Grenelle%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1653840280312!5m2!1sfr!2sfr" width="380" height="320" style="border:0; float: right;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div style=" width: 500px; text-align: center; margin-top: 90px;">
						<p>
							Nous nous trouvons au 37 Quai de Grenelle, Paris 75015. <br>
							Vous pouvez nous contacter au <u><b style="color: blue;">01 44 39 06 00</b></u> ou à l'adresse suivante <u><b><a href="mailto:omnes.sport@omneseducation.org">omnes.sport@omneseducation.org</a></b></u>
						</p>
					</div>
					
				</div>

				<div class="spacer"></div>

				<div id="Services">
					<h3 style="color: red; margin-left: 20px;"><b>&bull; Nos services</b></h3>

					<div>
						<p>
							Nous vous proposons en plus de nos activités et nos sports pratiquable en compétition: <br>

							<div id="boxe" style=" margin-left: 30px;">
								<p>
									<b><a style="font-size: 18px;font-family: 'Gill Sans', sans-serif;" href="reservation_ring_boxe.php">Le service de ring de boxe</a></b><br><br>

									Venez dans notre ring de boxe et réservez une séance d'1h quand vous le voulez sur les créneau disponible dans notre salle de boxe ! Pour profiter de ceci vous pouvez aussi prendre un abonnement de 69€. <br><br> 

									<img src="salleSport.png" height="200" width="300"><br><br>

									<a style="font-family: 'Gill Sans', sans-serif;" href="reservation_ring_boxe.php">Cliquez-ici pour plus d'informations</a>
							</div>

							<div>
								<p>
									Nous vous proposerons d'autres services bientôt, dont un terrain de tennis actuellement en construction ! N'hésitez pas à suivre nos événements de la semaine et nos réseaux pour être informé ! <span style="font-size: 16px">&#128521;</span>
								</p>
							</div>
							
						</p>
					</div>
				</div>


			</div>
			<div class="col-sm-2 sidenav2">
			</div>
		</div>
	</div>





	<?php include 'footer.php';  ?>

</body>
</html>