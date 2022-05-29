<a style="margin-left: 30px;" class="btn btn-success btn-lg" href="#demo1">Ajouter un coach</a>
<?php  

		$database = "omnessport";
		$invalid ="";
	//connectez-vous dans votre BDD
	//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);

		if ($db_found)
		{
			if(isset($_POST['submit2']))
			{
				
				if( (empty($_POST['mail'])) || (empty($_POST['mdp'])) || (empty($_POST['nom'])) || (empty($_POST['age'])) || (empty($_POST['prenom'])) || (empty($_POST['adresse'])) || (empty($_POST['telephone'])) || (empty($_POST['profession'])))
				{
					$invalid="Veuillez remplir tout les champs";
				}
				else
				{

					$PRE = isset($_POST["prenom"])? $_POST["prenom"] : "";
					$NOM = isset($_POST["nom"])? $_POST["nom"] : "";
					$AGE = isset($_POST["age"])? $_POST["age"] : "";
					$TYPE = "coach";
					$EML = isset($_POST["mail"])? $_POST["mail"] : "";
					$PWD = isset($_POST["mdp"])? $_POST["mdp"] : "";
					$ADRESSE = isset($_POST["adresse"])? $_POST["adresse"] : "";
					$TEL = isset($_POST["telephone"])? $_POST["telephone"] : "";
					$PROF = isset($_POST["profession"])? $_POST["profession"] : "";

					$sql = "SELECT Email FROM utilisateur";
					$result=mysqli_query($db_handle,$sql);
					while ($data = mysqli_fetch_assoc($result))
					{
						if($EML == $data['Email'])
						{
							$invalid="Cette adresse mail existe déjà, créez un autre email";
							break;
						}
					}

					if($invalid =='')
					{
						$sql="INSERT INTO utilisateur (Prenom,Nom,Age,Type,Email,Mdp,Adresse,Tel,Profession) values ( '$PRE','$NOM','$AGE','$TYPE','$EML','$PWD','$ADRESSE','$TEL','$PROF')";
						$result=mysqli_query($db_handle,$sql);

						
					}

				}
			}
		}
		?>


<div id="demo1" class="modal">
	<div class="modal_content">
		<a href="#" class="modal_close" style="font-size: 30px; background-color: yellow; border: 2px solid black;">&times;</a>
		<h2><b>Ajouter un coach</b></h2><br>

		<form action="" method="post">
			<b>Nom:</b>
			<input type="text" name="nom"><br><br>

			<b>Prénom:</b>
			<input type="text" name="prenom"><br><br>

			<b>Age:</b>
			<input type="number" name="age"><br><br>

			<b>Email:</b>
			<input type="text" name="mail"><br><br>

			<b>MDP:</b>
			<input type="password" name="mdp"><br><br>

			<b>Adresse:</b>
			<input type="text" name="adresse"><br><br>

			<b>Téléphone:</b>
			<input type="number" name="telephone"><br><br>

			<b>Profession:</b>
			<input type="text" name="profession"><br><br>

			<input type="submit" class="btn btn-warning btn-lg" value="Ajouter" name="submit2"><br>
			<span><?php echo $invalid; ?></span>

		</form>

	</div>
</div>