<?php
include'login.php'
?>
<?php if(!isset($_SESSION['nom'])):  ?>
	<div class="login">
		<div class="container">
			<h2><b>Se connecter à un compte déjà existant</b></h2><br>
			<form action="" method="post">
				<table border="1">
					<div class="form-group">
						<label for="email"><b>Email:</b></label>
						<input type="email" class="form-control" name="eml" placeholder="Entrer votre email">
					</div>
					<div class="form-group">
						<label for="pwd"><b>Mot de passe:</b></label>
						<input type="password" class="form-control" name="pwd" placeholder="Entrer votre mot de passe">
					</div>

					
					<input type="submit" class="btn btn-primary btn-lg" value="Se connecter" name="submit">
					
					
					&nbsp;<button type="button" class="btn btn-success btn-lg" onclick="window.location.href = 'formulaire_inscription.php';">S'inscrire</button>
					
				</table>
				<span><?php echo $invalid; ?></span>
			</form>
		</div>
	</div>

<?php else: ?>
	<div class="alert alert-success" role="alert">
		Bonjour et bienvenue sur votre compte <?php echo $_SESSION['prenom'] ."&nbsp;" .$_SESSION['nom']; ?>
	</div>
	<!-- Si c le client qui se connecte on affiche ceci -->
	<?php if($_SESSION['type'] == 'Client'): ?>

		<div id="infoCompte" style="border: 2px solid black; width: 400px; color: black; font-size: 18px; margin-left: 30px;">
			
			<h3><b>Voici les informations de votre compte</b></h3>

			<p>
				<b>Nom: </b>  <?php echo  $_SESSION['nom']; ?><br>
				<b>Prénom: </b> <?php echo  $_SESSION['prenom']; ?><br>
				<b>Adresse: </b> <?php echo  $_SESSION['Adresse']; ?><br>
				<b>Email: </b> <?php echo $_SESSION['Email']; ?> <br>
				<b>Téléphone</b> <?php echo $_SESSION['telephone']; ?><br>
			</p>
			<p>Si une de ses informations est incorrecte veuillez contacter notre service en ligne</p>
			
		</div>
		<br><form action="" method="post"><input style="margin-left: 30px;" type="submit" class="btn btn-primary btn-lg" name="deconnexion" value="Se déconnecter"></form>

		<?php  
			if(isset($_POST['deconnexion'])) //S'il clique sur le boutton déconnexion on le déconnecte
			{
				$conn=mysqli_connect("localhost","root","");
				$db = mysqli_select_db($conn,"omnessport");
				$EML = $_SESSION['Email'];
				$sql = mysqli_query($conn, "UPDATE `utilisateur` SET `Online` = 'false' WHERE Email = '$EML'");

				session_destroy();
				header("location: Accueil.php");

			}
		?>
		<!-- Si c le coach qui se connecte on affiche ceci -->
	<?php elseif($_SESSION['type'] == 'coach'): ?>


		<div id="infoCompte" style="border: 2px solid black; width: 400px; color: black; font-size: 18px; margin-left: 30px; background-color: lightblue;">
			
			<h3><b>Voici les informations de votre compte</b></h3>

			<p>
				<b>Nom: </b>  <?php echo  $_SESSION['nom']; ?><br>
				<b>Prénom: </b> <?php echo  $_SESSION['prenom']; ?><br>
				<b>Adresse: </b> <?php echo  $_SESSION['Adresse']; ?><br>
				<b>Email: </b> <?php echo $_SESSION['Email']; ?> <br>
				<b>Téléphone</b> <?php echo $_SESSION['telephone']; ?><br>
			</p>
			<p>Si une de ses informations est incorrecte veuillez contacter notre service en ligne</p>
			
		</div>
		<br>
		<form action="" method="post">
			<input style="margin-left: 30px;" type="submit" class="btn btn-primary btn-lg" name="deconnexion" value="Se déconnecter">
			<input style="margin-left: 30px;" type="submit" class="btn btn-danger btn-lg" name="chatroom" value="Rejoindre le chat">
		</form>

		<?php  
			if(isset($_POST['deconnexion'])) //S'il clique sur le boutton déconnexion on le déconnecte
			{
				$conn=mysqli_connect("localhost","root","");
				$db = mysqli_select_db($conn,"omnessport");
				$EML = $_SESSION['Email'];
				$sql = mysqli_query($conn, "UPDATE `utilisateur` SET `Online` = 'false' WHERE Email = '$EML'");

				session_destroy();
				header("location: Accueil.php");

			}
			else if(isset($_POST['chatroom'])) //S'il clique sur le boutton déconnexion on le déconnecte
			{
	
				header("location: chat.php");
			}
		?>

		<!-- Si c l'administrateur qui se connecte on affiche ceci -->
		<?php elseif($_SESSION['type'] == 'admin'): ?>


		<div id="infoCompte" style="border: 2px solid black; width: 400px; color: black; font-size: 18px; margin-left: 30px; background-color: lightblue;">
			
			<h3><b>Voici les informations de votre compte</b></h3>

			<p>
				<b>Nom: </b>  <?php echo  $_SESSION['nom']; ?><br>
				<b>Prénom: </b> <?php echo  $_SESSION['prenom']; ?><br>
				<b>Adresse: </b> <?php echo  $_SESSION['Adresse']; ?><br>
				<b>Email: </b> <?php echo $_SESSION['Email']; ?> <br>
				<b>Téléphone</b> <?php echo $_SESSION['telephone']; ?><br>
			</p>
			
			
		</div>
		<br>
		<form action="" method="post">
			<input style="margin-left: 30px;" type="submit" class="btn btn-primary btn-lg" name="deconnexion" value="Se déconnecter">
			<input style="margin-left: 30px;" type="submit" class="btn btn-warning btn-lg" name="createCV" value="Ajouter un CV de coach">
			<?php include('suppressioncoach.php');  ?>
			<?php include('ajoutcoach.php'); ?>
			
		</form>

		<?php  
			if(isset($_POST['deconnexion'])) //S'il clique sur le boutton déconnexion on le déconnecte
			{
				$conn=mysqli_connect("localhost","root","");
				$db = mysqli_select_db($conn,"omnessport");
				$EML = $_SESSION['Email'];
				$sql = mysqli_query($conn, "UPDATE `utilisateur` SET `Online` = 'false' WHERE Email = '$EML'");

				session_destroy();
				header("location: Accueil.php");

			}
			else if(isset($_POST['createCV'])) //S'il clique sur le boutton déconnexion on le déconnecte
			{
				header("location: Accueil.php"); // On redirige vers la page de création
			}

		?>
		<?php endif; ?>

	<?php endif; ?>


