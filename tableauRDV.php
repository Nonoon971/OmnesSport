<?php 
    $database = "omnessport";
	$db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

  //  $coachName= isset($_POST["nom"])? $_POST["nom"] : "";

    if($db_found){
    	$sql="SELECT Heure,jour FROM rdv WHERE coach='$coachName'";

    	$result = mysqli_query($db_handle, $sql);

    	if (mysqli_num_rows($result) == 0) {
		//la recherche n'existe pas
		echo "membre not found";
		}
		else{

			$tabHorraire = array();
			$tabJour= array();
			$i=0;
			while ($data = mysqli_fetch_assoc($result)){
				$tabHorraire[$i]=$data['Heure'];
				$tabJour[$i]=$data['jour'];   
			}

			echo "<table border='2'>
					<tr>
						<th>  Lundi  </th>
						<th>  Mardi  </th>
						<th>  Mercredi  </th>
						<th>  jeudi  </th>
						<th>  Vendredi  </th>
						<th>  Samedi  </th>
					</tr>";

			include("Variable.php");
			$i=0;
			$y=0;
			$z=0;
			for($i=0;$i<count($HorraireALL);$i++){
				echo "<tr> ";

				for($y=0;$y<count($DayALL);$y++){
					for($z=0;$z<count($tabHorraire);$z++){
						if(($tabHorraire[$z]==$HorraireALL[$i])&&($tabJour[$z]==$DayALL[$y])){
							echo " <div id='reserve'> 
										<th> R". $HorraireALL[$i]." R</th>
								   </div> ";
						}
						else{

							echo "<th>". $HorraireALL[$i] ." </th>";

						}
					}
				}
				echo  "</tr>";
			}
			echo "</table";
		}
    }
?>