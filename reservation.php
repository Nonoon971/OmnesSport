
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
	if(isset($_GET['Name'])){
   	   $Cresa= $_GET['Name'];
       
	}    
	else{
		$Cresa = 'null';
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

    //$CoachID=0;
    //$rdvID=0;

    if($db_found){

        /*recuperer l'ID du coach
    	$sql="SELECT ID FROM utilisateur WHERE Nom='$Cresa'";

    	$result = mysqli_query($db_handle, $sql);

      	$data = mysqli_fetch_assoc($result);*/

      	//$CoachID=$data['ID'];	

      	///inserer le nouveau rdv		
			
    	$sql="INSERT INTO rdv (Date,heure,Lieu,Sport,capacite,Specification,jour,coach) VALUES('$Jresa','$Hresa','Paris','$Sport','21 places','non','$Jresa', 'test')";

    	$result = mysqli_query($db_handle, $sql);

    	/*recuperer l'ID du rdv

    	$sql="SELECT ID FROM rdv WHERE coach='$Cresa' AND jour='$Hresa' AND Heure='$Jresa' AND Sport='$Sport'";

    	$result = mysqli_query($db_handle, $sql);

      	while($data = mysqli_fetch_assoc($result)){

      			$rdvID=$data['ID'];*/
      	}

      	///Ajout a la table d'affiliation pour le client et le coach
/*
      	$sql="INSERT INTO affiliation (`ID_User`,`ID_RDV`) VALUES($CoachID,$rdvID)";

    	$result = mysqli_query($db_handle, $sql);

    	$UserID=(int)$_SESSION['ID'];
        
       	$sql="INSERT INTO affiliation (`ID_User`,`ID_RDV`)  VALUES($UserID,$rdvID)";

    	$result = mysqli_query($db_handle, $sql);


    */

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
	 
	  <h3>Réservation</h3>
     <p>Vous venez de réserver le crénaux de : <?php echo $Jresa ." le ".$Hresa?></p>
</body>
</html>


