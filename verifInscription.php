<?php 


$invalid='';
//identifier BDD
$database = "omnessport";
		//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//declaration des variables
if(isset($_POST['submit']))
{
	if( (empty($_POST['eml'])) || (empty($_POST['pwd'])) || (empty($_POST['nom'])) || (empty($_POST['age'])) || (empty($_POST['type'])) || (empty($_POST['pre'])) || (empty($_POST['adresse'])) || (empty($_POST['tel'])) || (empty($_POST['prof'])))
	{
		$invalid="Veuillez remplir tout les champs";
	}
	
	
	else
	{
		

		$PRE = isset($_POST["pre"])? $_POST["pre"] : "";
		$NOM = isset($_POST["nom"])? $_POST["nom"] : "";
		$AGE = isset($_POST["age"])? $_POST["age"] : "";
		$TYPE = isset($_POST["type"])? $_POST["type"] : "";
		$EML = isset($_POST["eml"])? $_POST["eml"] : "";
		$PWD = isset($_POST["pwd"])? $_POST["pwd"] : "";
		$ADRESSE = isset($_POST["adresse"])? $_POST["adresse"] : "";
		$TEL = isset($_POST["tel"])? $_POST["tel"] : "";
		$PROF = isset($_POST["prof"])? $_POST["prof"] : "";

		$sql = "SELECT Email FROM utilisateur";
		$result=mysqli_query($db_handle,$sql);
		while ($data = mysqli_fetch_assoc($result))
		{
			if($EML == $data['Email'])
			{
				$invalid="Cette adresse mail existe déjà, connectez-vous avec ou choississez un autre email";
				break;
			}
		}
		if($invalid =='')
		{
			$sql="INSERT INTO utilisateur (Prenom,Nom,Age,Type,Email,Mdp,Adresse,Tel,Profession,CV) values ( '$PRE','$NOM','$AGE','$TYPE','$EML','$PWD','$ADRESSE','$TEL','$PROF','')";
			$result=mysqli_query($db_handle,$sql); 

			$_SESSION['nom'] = $NOM;
			$_SESSION['prenom'] = $PRE;
			$_SESSION['Email'] = $EML;
			$_SESSION['Adresse'] = $ADRESSE;
			$_SESSION['telephone'] = $TEL;
			$_SESSION['type'] = $TYPE;

			$sql="SELECT ID FROM utilisateur WHERE Email=$EML";
			$result=mysqli_query($db_handle,$sql); 
			$data = mysqli_fetch_assoc($result);

			$_SESSION['ID'] = $data['ID'];

			header("location: loginsuccess.php");
		}
	}
}

?>
<?php if(!isset($_SESSION['nom'])):  ?>
	
	<div class="container py-5 h-100">
		<form action="" method="post">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col">

					<div class="row g-0">

						<div class="col-xl-6">

							<h2 class="mb-5 text-uppercase"><b>Création d'un nouveau compte</b></h2><br>

							<div class="row">
								<div class="col-md-6 mb-4">
									<div class="form-outline">
										<label for="nom"><b>Nom:</b></label>
										<input type="text" class="form-control" name="nom" placeholder="Entrer nom">
									</div>
								</div>
								<div class="col-md-6 mb-4">
									<div class="form-outline">
										<label for="pre"><b>Prénom:</b></label>
										<input type="text" class="form-control" name="pre" placeholder="Entrer prenom">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6 mb-4">
									<div class="form-outline">
										<br><label for="age"><b>Âge:</b></label>
										<input type="number" class="form-control" name="age" placeholder="Entrer votre age">
									</div>
								</div>
								<div class="col-md-6 mb-4">
									<div class="form-outline">
										<br><label for="eml"><b>Email:</b></label>
										<input type="email" class="form-control" name="eml" placeholder="Entrer votre mail">
									</div>
								</div>
							</div>

							<div class="form-outline mb-4">
								<label for="adresse"><br><b>Adresse:</b></label>
								<input type="text" class="form-control" name="adresse" placeholder="Entrer votre adresse">

								<div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

									<h5 class="mb-0 me-4"><br><b>Type: </b></h5>

									<div class="form-check form-check-inline mb-0 me-4">
										<input class="form-check-input" type="radio" name="type" id="client"
										value="Client" /><b> Client</b><br>
										<input class="form-check-input" type="radio" name="type" id="coach"
										value="Coach" /><b> Coach</b><br>
										
									</div>

								</div>


								<div class="form-outline mb-4">
									<label for="tel"><br><b>Téléphone:</b></label>
									<input type="number" class="form-control" name="tel" placeholder="Entrer votre numero de telephone">
								</div>

								<div class="form-outline mb-4">
									<label for="prof"><br><b>Profession:</b></label>
									<input type="text" class="form-control" name="prof" placeholder="Entrer votre profession">
								</div>

								<div class="form-outline mb-4">
									<label for="pwd"><br><b>Mot de passe:</b></label>
									<input type="password" class="form-control" name="pwd" placeholder="Entrer votre mot de passe">
								</div>

								

								<div class="d-flex justify-content-end pt-3">
									<br><input type="submit" class="btn btn-primary btn-lg" name="submit" value="Soumettre">

								</div>

							</div>


						</div>
					</div>

				</div>
			</div>
			<span><?php echo $invalid; ?></span>
		</form>
	</div>




	<?php endif; ?>