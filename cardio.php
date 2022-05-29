<?php session_start(); ?>

<?php if(!isset($_SESSION['nom'])):  ?>
	<?php header("location: loginsuccess.php"); ?>
<?php else: ?>
	<?php  
	$conn=mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"omnessport");

	$query = mysqli_query($conn,"SELECT Nom, Prenom FROM utilisateur WHERE Profession = 'coach de cardio'");
	?>
	<?php if ( mysqli_num_rows($query) == 0): ?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			
			<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
			<script src="./popup.js" defer>	
			</script>
			<title>Cardio-Training</title>
			<style type="text/css">
				#test:hover ul li
				{
					display: block;
					left: 190px;	
					bottom: 28px;		
				}
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
			<h2><b>Veuillez nous excuser nous avons pas encore de coach de Cardio-Training disponible !</b></h2>
			<?php include_once('footer.php'); ?>
		</body>
		</html>
	<?php else: ?>
		<?php 
		$data = mysqli_fetch_assoc($query);
		$nom = $data['Nom'];
		$prenom = $data['Prenom'];
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
			<title>Cardio-Training</title>
			<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="./popup.js" defer></script>	
			<style type="text/css">
				#test:hover ul li
				{
					display: block;
					left: 190px;	
					bottom: 28px;		
				}
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

				<p>Pour rester en pleine forme, nous proposons des séances de cardio rien que pour vous <br><br> 
					Vous y trouverez toutes les machines dont vous aurez besoin pour développer votre musculature. <br><br>
					Cette salle s'étend sur plus de 400m <sup>2</sup> et surplombe le parc végétal, vous permettant de faire du sport <strong>comme si vous vous trouviez en pleine nature !</strong></p> 

					<img id="salle" src="sallecardio.jpg">

					<p> Le coach de Cardio est <?php echo $prenom ."&nbsp;" .$nom;  ?> </p>

					<div id="description">
						<p> Salut moi c'est <?php echo $prenom ."&nbsp;" .$nom;  ?>, avec moi, tu vas avoir un cardio d'enfer donc réserve dès maintenant ton rendez-vous !</p>

						<p id="dispo"> Voici mes disponibilités </p> 

						<?php  $coachName=$nom ; $Sport='cardio';?>


						<?php require('tableauRDV.php')?>

					</div>
				</div>
				<?php include_once('footer.php'); ?>
			</body>
			</html>
		<?php endif; ?>
		<?php endif; ?>