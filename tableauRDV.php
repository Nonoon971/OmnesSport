<?php 
    $database = "omnessport";
	$db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
echo "<style>#reserve{background-color : blue ;}
						 #tabRdv{margin: 0 auto;}
						 a{ text-decoration-line : none;}
							input{margin: 0 auto;}
									  </style>";
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
				$i=$i+1;
			}

			echo "<form action='reservation.php' method='post'>
						<table id='tabRdv' border='2'>
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
			$marque=0;
			$test=0;
			for($i=0;$i<count($HorraireALL);$i++){
				echo "<tr id='". $i ."'>";
        if($i==0){$marque=0;}
        if($i==1){$marque=10;}
        if($i==2){$marque=20;}
        if($i==3){$marque=30;}
        if($i==4){$marque=40;}
        if($i==5){$marque=50;}
				
				for($y=0;$y<count($DayALL);$y++){
					for($z=0;$z<count($tabHorraire);$z++){
						if(($tabHorraire[$z]==$HorraireALL[$i])&&($tabJour[$z]==$DayALL[$y])){
							$test=1;
						}
						else{
							
						}
					}
					if($test==1){
						echo '  
										<td id="reserve"> '. $HorraireALL[$i].' </td>
								    ';
						$test=0;
					}
					else{
								$marque=(int)$marque+ (int)$y;
						//	echo "<td id='". (string)$marque ."'><input type='submit' name='valider' value='". $HorraireALL[$i] ."'></td>";
							echo "<td id='". (string)$marque ."'><a href='reservation.php?Jour=".$HorraireALL[$i]."&Heure=".$DayALL[$y]."&Name=".$coachName."'>". $HorraireALL[$i] ."</a></td>";
							$marque=$marque-$y;
					}
				}
				echo  "</tr>";
			}
			echo "</table>
						</form>";
		}
    }
?>

