<?php 

$invalid='';

if(isset($_POST['submit'])){
	if(empty($_POST['eml']) || empty($_POST['pwd'])){
		$invalid="Veuillez remplir les 2 champs";
	}
	else
	{
		$EML = isset($_POST["eml"])? $_POST["eml"] : "";
		$PWD = isset($_POST["pwd"])? $_POST["pwd"] : "";


		$conn=mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"omnessport");

		$query = mysqli_query($conn,"SELECT * FROM utilisateur WHERE Mdp='$PWD' AND Email='$EML'");

		$rows = mysqli_num_rows($query);
		

		if($rows==1)
		{
			$data = mysqli_fetch_assoc($query);
			$_SESSION['ID'] = $data['ID'];
			$_SESSION['nom'] = $data['Nom'];
			$_SESSION['prenom'] = $data['Prenom'];
			$_SESSION['Email'] = $EML;
			$_SESSION['Adresse'] = $data['Adresse'];
			$_SESSION['telephone'] = $data['Tel'];
			$_SESSION['type'] = $data['Type'];
			$sql = mysqli_query($conn, "UPDATE `utilisateur` SET `Online` = 'true' WHERE Email = '$EML'");
			$data2 = mysqli_fetch_assoc($sql);
			$_SESSION['enLigne'] = $data2['Online'];
			header("location: loginsuccess.php");
		}
		else
		{
			$invalid = "Mot de passe ou email erroné";
		}
		mysqli_close($conn);
	}
}

?>	