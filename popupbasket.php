<br><a style="color: blue;" href="#demo">Découvrez notre coach de basketball et ses disponibilités ici</a>


<div id="demo" class="modal">
	<div class="modal_content">
		<?php  

		$database = "omnessport";
	//connectez-vous dans votre BDD
	//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);

		if ($db_found)
		{
			$sql = "SELECT Nom, Prenom, Tel, Profession, Email,CV FROM utilisateur WHERE Type = 'coach' AND Profession ='coach de basket'"; //Le cv se peut qu'il doit être récupéré quand on clique sur le bouton

			$result = mysqli_query($db_handle, $sql);

			if (mysqli_num_rows($result) == 0) 
			{
				//la requete ne donne rien
				echo "<h2> Veuillez nous excusez il n'y a pas de coach disponible pour cette activité pour le moment </h2>";
			} 
			else 
			{

				while ($data = mysqli_fetch_assoc($result))
				{
					$nom = $data['Nom'];
					$prenom = $data['Prenom'];
					$tel = $data['Tel'];
					$profession = $data['Profession'];
					$mail = $data['Email'];
					$cv = $data['CV']; 

					$photo =  strtolower($prenom .$nom);

					echo "<div id='info'>

					<img src='$photo.jpg' alt='photo coach' width='100' height='200'>

					<div id='info-text'>
					<p> 
					<h3><b>" .$nom ."&nbsp;" .$prenom ."</b><br>
					" .$profession ."</h3>
					Téléphone: " .$tel ."<br>
					Email: " .$mail ."<br>
					</p>
					</div>
					</div>";


				}
			}
		}
		?>

		<a href="#" class="modal_close" style="font-size: 30px; background-color: yellow; border: 2px solid black;">&times;</a>
		<div class="spacer"></div>
		<div id="boutton">
			<br><br><button type="button" class="btn btn-success btn-lg" onclick="window.location.href = 'basket.php';">Prendre RDV</button>
			<button type="button" class="btn btn-primary btn-lg" onclick="window.location.href = 'basket.php';" style="width: 150px;">Echanger avec <br>le coach</button>
			<button type="button" class="btn btn-warning btn-lg" onclick="window.location.href = 'basket.php';">Voir son CV</button>

		</div>
	</div>
</div>