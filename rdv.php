<?php session_start(); ?>

<?php if(!isset($_SESSION['nom'])):  ?>
<?php header("location: loginsuccess.php"); ?>

<?php else: ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rendez-vous</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
  	<style type="text/css">
  		#test:hover ul li
		{
			display: block;
			left: 190px;	
			bottom: 28px;		
		}
	</style>
</head>
<body>
	<?php include('header.php'); ?>
</body>
</html>


<?php endif; ?>
