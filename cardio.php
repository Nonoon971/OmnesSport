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

		 <h2>Cardio-Training</h2>

		 <p>Pour rester en pleine forme, nous proposons des seances de cardio rien que pour vous <br><br> 
		 	Vous y trouverez toutes les machines dont vous aurrez besoin pour dévelloper votre musculature. <br><br>
		 Cette salle s'étant sur plus de 400m <sup>2</sup> et surplombe le parc végétal, vous permettant de faire du sport <strong>comme si vous vous trouviez en pleine nature !</strong></p> 

		 <img id="salle" src="sallecardio.jpg">
	    
		<p> Le coach de Cardio est Jean Lesportif </p>
		   
		<div id="description">
			<p> Salut moi c'est Jean Lesportif, avec moi, tu vas avoir un cardio d'enfer donc réserve dès maintenant ton rendez-vous !</p>

			<p id="dispo"> Voici mes disponibilités </p> 
         
			<?php  $coachName='Lesportif' ; $Sport='cardio'?>
			

			<?php require('tableauRDV.php')?>
			
		</div>
	</div>
       <?php include_once('footer.php'); ?>
</body>