<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
	<title>Reservation ring de boxe</title>
	<style type="text/css">
		#section{
			margin : 0 auto;
			text-align: center;
			background-color: #ADD8E6;
		}
		h2{
			background-color: grey;
		}

		
	</style>
</head>
<body>
  <?php include("header.php")?>
	
	
	<div id="section">

		 <h2> Ring de boxe</h2>

		 <p>Notre salle OmnesSport met a disposition des rings de Boxe/MMA/UFC pour tous les abonné(e)s <br><br> 
		 	Les créneaux de reservation sont disponibles dans le tableau ci-dessous , à partir de 9h jusqu'a 19h du lundi au samedi <br><br>
		 Cette salle s'étant sur plus de 400m² et surplombe le parc végétal, vous permettant de faire du sport <strong>comme si vous vous trouviez en pleine nature !</strong></p> 
	    
		<p> Voici un apercu des rings de boxes.</p>
		   <img src="boxe2.png" alt="" height="400" width="400">

		<div id="description">
			<p> Voici les créneaux disponible de la semaine :</p>

			
         
			
			<?php  $sportName='Ring' ; $Sport='boxe'?>

			<?php require('tabRDVPaiement.php')?>
			
		</div>
	</div>

  <?php include("footer.php")?>

       
</body>