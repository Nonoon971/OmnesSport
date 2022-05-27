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

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OmnesSport</title>
</head>
<body>
     <p><?php echo $Jresa ." et ".$Hresa ?></p>
</body>
</html>


