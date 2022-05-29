<a style="margin-left: 30px;" class="btn btn-danger btn-lg" href="#demo">Supprimer un coach</a>

<div id="demo" class="modal">
	<div class="modal_content">
		<a href="#" class="modal_close" style="font-size: 30px; background-color: yellow; border: 2px solid black;">&times;</a>
		<h2><b>Supprimer un coach</b></h2>
		<?php  

		$database = "omnessport";
	//connectez-vous dans votre BDD
	//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);

		if ($db_found)
		{
			$sql = "SELECT * FROM utilisateur WHERE Type = 'coach'"; 

			$result = mysqli_query($db_handle, $sql);

			if (mysqli_num_rows($result) == 0) 
			{
				//la requete ne donne rien
				echo "<h2> Il n'y a plus de coach dans la communauté Omnes Sport </h2>";
			} 
			else 
			{
				echo '<form action="" method="post" id="info-text">
				<select name="coach" id="coach-select">
				<option value="">--Choississez un coach--</option>';
				while ($data = mysqli_fetch_assoc($result))
				{
					$nom = $data['Nom'];
					$prenom = $data['Prenom'];

					echo '<option value="';
					echo  $nom .' ' .$prenom .'">';
					echo $nom .' ' .$prenom;
					echo '</option>';

				}
				echo '</select>
				<input type="submit" class="btn btn-warning btn-lg" value="Suppression" name="submit">
				</div>';

				if(isset($_POST['submit']))
				{
					$coach = isset($_POST['coach']) ? $_POST['coach'] : "";

					$sql = "DELETE FROM utilisateur WHERE Nom ='$nom' AND Prenom ='$prenom' "; 

					$result = mysqli_query($db_handle, $sql);


				}


			}
		}
		?>



	</div>
</div>