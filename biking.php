<?php session_start(); ?>

<?php if(!isset($_SESSION['nom'])):  ?>
	<?php header("location: loginsuccess.php"); ?>
<?php else: ?>
	<?php  
	$conn=mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"omnessport");

	$query = mysqli_query($conn,"SELECT Nom, Prenom FROM utilisateur WHERE Profession = 'coach de biking'");
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
			<title>Biking</title>
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
			<h2><b>Veuillez nous excuser nous avons pas encore de coach de biking disponible !</b></h2>
			<?php include_once('footer.php'); ?>		</body>
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
				
				<title>Biking</title>
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
						Vous y trouverez toutes les machines dont vous aurez besoin pour développer votre corps. <br><br>
						Cette salle est située dans un cinéma, vous permettant de faire du sport <strong>tout en appréciant un bon film !</strong></p> 

						<img id="salle" src="sallebiking.jpg">

						<p> Le coach de musculation est <?php echo $prenom ."&nbsp;" .$nom;  ?> </p>

						<div id="description">
							<p> Salut moi c'est <?php echo $prenom ."&nbsp;" .$nom;  ?>, je suis un coach sportif spécialisé dans le Biking donc si tu a envie d'avoir un corps d'Appolon, n'hésite pas à reserver un créneau avec moi !</p>

							<p id="dispo"> Voici mes disponibilités </p> 

							<?php  $coachName=$nom ; $Sport='biking';?>


							<?php require('tableauRDV.php')?>

						</div>
					</div>
					<?php include_once('footer.php'); ?>
				</body>
			<?php endif; ?>
			<?php endif; ?>