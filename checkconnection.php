<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php include_once('Fonction.php') ?>

<?php 

   $log = isset($_POST["log"])? $_POST["log"] : "";
    $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
	
    $Users= array();
    if(CheckConnection($log,$mdp)!=null){

    	$Users=CheckConnection($log,$mdp);
    }else
    {
    	$Users=null;
    } 

?>
  <p> <?php echo $Users['Prenom'] ;?></p>

</body>
</html>

