<?php session_start(); ?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mon compte</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
  	<link rel="stylesheet" type="text/css" href="csspopup.css">
  	<script src="./popup.js" defer></script>
  	<style type="text/css">
  		#test:hover ul li
		{
			display: block;
			left: 190px;	
			bottom: 28px;		
		}
		body
		{
			background-image: url('connexion.jpg');
			background-size: cover;
		}
  	</style>
</head>
<body>
	<?php include('header.php'); ?>

	<?php include('loginformulaire.php'); ?>

</body>
</html>

