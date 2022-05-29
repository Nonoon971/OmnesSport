<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nos sports en compétition</title>
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="./popup.js" defer>	
	</script>
	<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
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
			height: 550%;
		}
		.sidenav2 {
			padding-top: 20px;
			background-color: grey;
			float: right;
			height: 550%;
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
						<li><a href="#basket">Basketball</a></li>
						<li><a href="#football">Football</a></li>
						<li><a href="#rugby">Rugby</a></li>
						<li><a href="#tennis">Tennis</a></li>
						<li><a href="#natation">Natation</a></li>
						<li><a href="#plongeon">plongeon</a></li>
					</ul>
				</div>
			</div>
			<div id="section2">
				<div id="section">

					<p>
						Voici tout les sports que vous pouvez pratiquer en compétition au sein de notre groupe Omnes sport avec nos coachs qui se feront un plaisir de vous accompagner.<br>
						Choisissez le sport de votre choix selon vos goûts et vos capacités.
					</p>

					<hr>
					<div id="basket">
						<h2>Basketball</h2>
						<p>
							Fan de Michael Jordan, Stephen Curry pour la new Generation ? Jouez contre d'autres équipes venant de différentes organisations. Des tournois sont notamment organisés. Un coach vous accompagnera et vous entraînera tout au long de votre inscription.
						</p>
						<img src="basket1.jpeg">
						<img src="basket.jpg">
						<img src="basket2.jpg">
						<p>
							<?php include('popupbasket.php'); ?>
						</p>
					</div>

					<hr>
					<div id="football">
						<h2>Football</h2>
						<p>
							Vous préférez le football ? Rejoignez notre équipe de foot et affrontez d'autres équipes venant d'autres communautés. Nos partenariat permettront notamment de vous offrir des réductions pour des matchs se déroulant au Parc de Princes ! Notre coach se fera un plaisir de vous superviser.
						</p>
						<img src="football.jpg">
						<img src="football1.jpg">
						<img src="football2.jpg">
						<p>
							<?php include('popupfootball.php'); ?>
						</p>

					</div>
					<hr>
					<div id="rugby">
						<h2>Rugby</h2>
						<p>
							Plus All Black, Wallabies ? Rejoignez notre équipe de rugby et affrontez d'autres équipes venant d'autres communautés. Nos partenariat permettront notamment de vous offrir des réductions pour des matchs de l'équipe de France par exemple! Notre coach se fera un plaisir de vous superviser.

						</p>
						<img src="rugby.jpg">
						<img src="rugby2.jpg">
						<img src="rugby1.jpg">
						<p>
							<?php include('popuprugby.php'); ?>
						</p>

					</div>

					<hr>
					<div id="tennis">
						<h2>Tennis</h2>
						<p>
							Si vous préférez les sports individuels, les sports qui vont suivre vont intéresseront ! Fan de Nadal, Djokovic ? Venez dans notre groupe de Tennis afin d'affronter d'autres joueurs venant d'autres organismes. Nos partenariat permettront notamment de vous offrir des réductions pour des matchs se déroulant en île de France! Notre coach se fera un plaisir de vous superviser. Vous pourrez aussi jouer en équipe de 2, bien sûr.

						</p>
						<img src="tennis.jpg">
						<img src="tennis2.jpg">
						<img src="tennis1.jpg">
						<p>
							<?php include('popuptennis.php'); ?>
						</p>

					</div>

					<hr>
					<div id="natation">
						<h2>Natation</h2>
						<p>
							Adepte de la nage, Venez dans notre équipe de Natation afin d'affronter d'autres joueurs venant d'autres organismes. Nos partenariat permettront notamment de vous offrir des réductions pour des séances se déroulant en île de France! Notre coach se fera un plaisir de vous superviser. <br>

						</p>
						<img src="natation1.jpg">
						<img src="natation.jpg">
						<img src="natation2.jpg">
						<p>
							<?php include('popupnatation.php'); ?>
						</p>

					</div>
					<hr>

					<div id="plongeon">
						<h2>Plongeon</h2>
						<p>
							Adepte du plongeon ? Venez dans notre équipe de Natation afin d'affronter d'autres joueurs venant d'autres organismes. Nos partenariat permettront notamment de vous offrir des réductions pour des séances se déroulant en île de France! Notre coach se fera un plaisir de vous superviser. <br>

						</p>
						<img src="plongeon.jpg">
						<img src="plongeon1.jpg">
						<img src="plongeon2.jpg">
						<p>
							<?php include('popupplongeon.php'); ?>
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