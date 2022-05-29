<?php 
	session_start() ;

	$invalid='';

	if(isset($_POST['submit'])){
		if(empty($_POST['eml']) || empty($_POST['pwd'])){
			$invalid="incorrect";
		}
		else
		{
			$EML = isset($_POST["eml"])? $_POST["eml"] : "";
			$PWD = isset($_POST["pwd"])? $_POST["pwd"] : "";


			$conn=mysqli_connect("localhost","root","");
			$db = mysqli_select_db($conn,"omnessport");

			$query = mysqli_query($conn,"SELECT Nom,Prenom,ID FROM utilisateur WHERE Mdp='$PWD' AND Email='$EML'");

			$rows = mysqli_num_rows($query);

			while ($data = mysqli_fetch_assoc($query)){
				$LastName=$data['Nom'];
				$Name=$data['Prenom'];
				$ID=$data['ID'];
			}

			if($rows==1){
				$_SESSION['nom']=$LastName;
				$_SESSION['prenom']=$Name;
				$_SESSION['ID']=$ID;
				$_SESSION['conn']=1;
				header("location: Musculation.php");
				}
				else
				{
				 $invalid = "faux";
				}
				mysqli_close($conn);
			}
		}
	?>	