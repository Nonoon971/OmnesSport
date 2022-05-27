<?php  

	$database = "omnessport";
	$db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found){
    	
    	$sql="INSERT INTO rdv (Heure,Jour,coach) VALUES($Hresa,$Jresa,$Cresa)";

    	$result = mysqli_query($db_handle, $sql);

    	echo "string";
    }
       
?>