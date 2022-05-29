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

		 <h2>Plongeon</h2>

		 <p>Notre complexe organise et cours de plongeon pour que tu puisse améliorer tes qualité dans ce sport</p> 

		 <img id="salle" src="salleplongeoir.jpg">
	    
		<p> Le coach de basket est Laurent Bibi</p>
		   
		<div id="description">
			<p> Salut moi c'est Laurent Bibi, avec moi, tu vas devenir le meilleur plongeur de ton groupe d'ami, donc réserve dès maintenant ton rendez-vous !</p>

			<p id="dispo"> Voici mes disponibilités </p> 
         
			<?php  $coachName='Bibi' ; $Sport='plongeon'?>
			

			<?php require('tableauRDV.php')?>
			
		</div>
	</div>
       <?php include_once('footer.php'); ?>
</body>