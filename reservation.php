<?php 

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
	if(isset($_GET['Name'])){
   	   $Cresa= $_GET['Name'];
       
	}    
	else{
		$Cresa = 'null';
	} 

	$database = "omnessport";
	$db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found){


    	
    	$sql="INSERT INTO rdv (`Heure`,`jour`,`coach`) VALUES('$Jresa','$Hresa','$Cresa')";

    	$result = mysqli_query($db_handle, $sql);

    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="test.css">
	<title>OmnesSport</title>
</head>
<body>
	  <?php include_once("header.php") ?>
	  <h3>Réservation</h3>
     <p>Vous venez de réserver le crénaux de : <?php echo $Jresa ." le ".$Hresa. " avec le coach ".$Cresa?></p>
</body>
</html>


