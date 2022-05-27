<?php  

	session_start() ;

	if(isset($_GET['ID'])){
   	   $ID = $_GET['ID'];
    
	}    
	else{
		$Jresa = 'null';
	}

	$database = "omnessport";
	$db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found){
    	$sql="DELETE FROM rdv WHERE ID='$ID'";

    	mysqli_query($db_handle, $sql);

    	$sql="DELETE FROM affiliation WHERE ID_RDV='$ID'";

    	mysqli_query($db_handle, $sql);

 	
    }

?>