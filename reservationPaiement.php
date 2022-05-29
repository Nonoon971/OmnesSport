
<?php 
session_start() ;


if(isset($_GET['Jour'])){
	$Jresa = $_GET['Jour'];

}    
else{
	$Jresa = 'null';
}
if(isset($_GET['Heure'])){
	$Hresa= $_GET['Heure'];

}    
else{
	$Hresa = 'null';
}  

if(isset($_GET['Sport'])){
	$Sport= $_GET['Sport'];

}    
else{
	$Sport = 'null';
} 

$database = "omnessport";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$CoachID=0;
$rdvID=0;

if($db_found){	

      	///inserer le nouveau rdv		

	$sql="INSERT INTO rdv (`Heure`,`Sport`,`jour`) VALUES('$Jresa','$Sport','$Hresa')";

	$result = mysqli_query($db_handle, $sql);

    	///recuperer l'ID du rdv

	$sql="SELECT ID FROM rdv WHERE jour='$Hresa' AND Heure='$Jresa' AND Sport='$Sport'";

	$result = mysqli_query($db_handle, $sql);

	while($data = mysqli_fetch_assoc($result)){

		$rdvID=$data['ID'];

	}

      	///Ajout a la table d'affiliation pour le client 

	$UserID=(int)$_SESSION['ID'];

	$sql="INSERT INTO affiliation (`ID_User`,`ID_RDV`)  VALUES($UserID,$rdvID)";

	$result = mysqli_query($db_handle, $sql);

    	////Ajout a la table des paiements

	$montant=69;

	$sql="INSERT INTO paiement (`ID_User`,`Montant`,`Activite`) VALUES($UserID,$montant,'$Sport')";

	$result = mysqli_query($db_handle, $sql);



}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
	<title>OmnesSport</title>
</head>
<body>
	<?php include_once("header.php") ?>
	<h3>Réservation</h3>
	<p>Vous, <?php echo $_SESSION['nom'] ?> venez de réserver le crénaux de : <?php echo $Jresa ." le ".$Hresa ." pour ". $Sport?></p>
</body>
</html>


