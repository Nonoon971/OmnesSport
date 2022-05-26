<?php 

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

			$query = mysqli_query($conn,"SELECT * FROM utilisateur WHERE Mdp='$PWD' AND Email='$EML'");

			$rows = mysqli_num_rows($query);

			if($rows==1){
				header("location: loginsuccess.php");
				}
				else
				{
				 $invalid = "faux";
				}
				mysqli_close($conn);
			}
		}
	?>	