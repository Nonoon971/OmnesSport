<?php  

echo '<meta charset="utf-8">';

$recherche = isset($_POST['q']) ? $_POST['q'] : "";

	//identifier votre BDD
$database = "omnessport";
	//connectez-vous dans votre BDD
	//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) 
{
	$sql = "SELECT DISTINCT count(lien) FROM recherche WHERE motscles LIKE '%$recherche%' OR titre LIKE '%$recherche%'";

	$result = mysqli_query($db_handle, $sql);


	if ( mysqli_num_rows($result) == 0) 
	{
		//la requete ne donne rien
		echo "<h2> Veuillez nous excusez, aucun résultat ne correspond à votre recherche </h2>";
	} 
	else
	{
		while ($data = mysqli_fetch_assoc($result))
		{
			$nombre = $data['count(lien)'];

			if($nombre == 0)
			{
				echo "<h2> Veuillez nous excuser, aucun résultat ne correspond à votre recherche </h2>";
			}
			else
			{

				if($nombre == 1)
				{
					echo "<h2> Un résultat correspond à votre recherche</h2>";
				}
				else
				{
					echo "<h2> $nombre résultats correspond à votre recherche</h2>";
				}


				$sql = "SELECT DISTINCT lien, motscles FROM recherche WHERE motscles LIKE '%$recherche%' OR titre LIKE '%$recherche%' ORDER BY titre ASC";

				$result = mysqli_query($db_handle, $sql);

				while ($data = mysqli_fetch_assoc($result))
				{

					
				}

			}
		}

	}



}



?>