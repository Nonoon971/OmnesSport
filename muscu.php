<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
	<title>OmnesSport</title>
</head>
<body>

	
	
	<div id="section">

		 <h2> Musculation</h2>

		 <p>Notre salle OmnesSport met a disposition une salle de musculattion pour tous les abonnés <br><br> 
		 	Vous y trouverez toutes les machines dont vous aurrez besoin pour dévelloper votre musculature. <br><br>
		 Cette salle s'étant sur plus de 400m <sup>2</sup> et surplombe le parc végétal, vous permettant de faire du sport <strong>comme si vous vous trouviez en pleine nature !</strong></p> 
	    
		<p> Le coach de musculation est M.personne </p>
		   <img src="coach_muscu.jpg">

		<div id="description">
			<p> Salut moi c'est M.Personne, <br> je suis un coach sportif spécialisé dans la musculation donc si tu a envie d'avoir un corps d'Appolon, n'hésite pas cliqer sur ce  <a href="FicheRdvMuscu.php?Nom=Personne">lien</a> pour voir plus d'information me concernant !</p>

			<p> Ca c'est Mon CV !!!!!</p> 
         
			<?php  $coachName='Personne' ; $Sport='muscu'?>

			<?php require('tableauRDV.php')?>
			
		</div>
	</div>
       <?php include_once('footer.php'); ?>
</body>