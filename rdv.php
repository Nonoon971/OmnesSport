<?php 

	session_start() ;

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
	<title>OmnesSport</title>
	<style type="text/css">
		table{
			margin: 0 auto;
		}
		a{
			text-decoration-line : none;
		}
		th{
			background-color: yellow;
		}
		h3{
			text-align: center;
		}
		#section{
			background-image: url('training.png');
			background-position: 5% 50%;
			background-repeat: no-repeat;
			box-sizing: border-box;
			margin: 0;
    height: 100%;
    border-radius: 2em;

		}
		html, body {
    margin: 0;
    height: 100%;
}
body {
    box-sizing: border-box;
    
    border-radius: 2em;
}

	</style>
</head>
<body>
	<?php include_once('header.php') ; ?>


	<div id="section">
    <h3>Mes rendez-vous de la semaine</h3>

    


    <?php 

    	$database = "omnessport";
		$db_handle = mysqli_connect('localhost', 'root', '');
    	$db_found = mysqli_select_db($db_handle, $database);

    	if($db_found){

    		$Id_sess=$_SESSION['ID'];

    		$sql="SELECT ID_RDV FROM affiliation WHERE ID_User='$Id_sess' ";

    		$result = mysqli_query($db_handle, $sql);

            echo "<table border='1'>";

            echo "<tr>
            		<th>Heure</th>
            		<th>Jour</th>
            		<th>Lieu</th>
            		<th>Activite</th>
            		<th>Responsable</th>
            		<th>Annuler le RDV</th>
            	  </tr>";
    		while($data = mysqli_fetch_assoc($result)){

    			$ID_rdv=$data['ID_RDV'];

    			$sql="SELECT Heure,jour,Lieu,Sport,coach FROM rdv WHERE ID='$ID_rdv'";

    		    $result2 = mysqli_query($db_handle, $sql);
    		    echo "<tr>";

    		    while($data2 = mysqli_fetch_assoc($result2)){
    		    	echo "<td>".$data2['Heure']."</td>
    		    	      <td>".$data2['jour']."</td>
    		    	      <td>".$data2['Lieu']."</td>
    		    	      <td>".$data2['Sport']."</td>
    		    	      <td>".$data2['coach']."</td>
    		    	      <td><a href='annulation.php?ID=".$ID_rdv."'>ANNULER</a></td>";


    		    }
    		    echo "</tr>";

    		}
    		echo "</table>";
    	}
     ?>


 </div>
 
 <?php include_once('footer.php') ; ?>

</body>
</html>