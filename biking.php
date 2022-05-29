<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
	<title>OmnesSport</title>
	<style type="text/css">
		h2{
			text-align: center;
			background-color: grey;
		}
		#photo{
			float: left;
		}
		#salle{
			text-align:center;
			margin:auto;
			display:flex;
		}
		p{
			text-align: center;
		}
		#section{
			background-color: #ADD8E6;
		}

	</style>
</head>
<body>

	<?php include_once('header.php');  ?>
	
	<div id="section">

		 <h2>Biking</h2>

		 <p>Notre salle OmnesSport propose des séances de <strong>Biking</strong> pour tous les abonnés <br><br> 
		 	Vous y trouverez toutes les machines dont vous aurrez besoin pour dévelloper votre corps. <br><br>
		 Cette salle est situé dans un cinéma, vous permettant de faire du sport <strong>tout en apréciant un bon film !</strong></p> 

		 <img id="salle" src="sallebiking.jpg">
	    
		<p> Le coach de musculation est M.personne </p>
		   
		<div id="description">
			<p> Salut moi c'est Didier Lamachine, je suis un coach sportif spécialisé dans le Biking donc si tu a envie d'avoir un corps d'Appolon, n'hésite pas à reserver un crénau avec moi !</p>

			<p id="dispo"> Voici mes disponibilités </p> 
         
			<?php  $coachName='Lamachine' ; $Sport='biking'?>
			

			<?php require('tableauRDV.php')?>
			
		</div>
	</div>
       <?php include_once('footer.php'); ?>
</body>