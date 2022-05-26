<?php  

echo '<meta charset="utf-8">';

echo '<link rel="stylesheet"	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
echo '<script src="./popup.js" defer></script>';
echo '<link rel="stylesheet" type="text/css" href="test.css">';

echo '<style type="text/css">
		#test:hover ul li
		{
			display: block;
			left: 190px;	
			bottom: 28px;		
		}
		</style>';

$recherche = isset($_POST['q']) ? $_POST['q'] : "";

	//identifier votre BDD
$database = "omnessport";
	//connectez-vous dans votre BDD
	//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

 include("header.php");

echo "<div id='section'";

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


				$sql = "SELECT DISTINCT lien, titre,info FROM recherche WHERE motscles LIKE '%$recherche%' OR titre LIKE '%$recherche%' ORDER BY titre ASC";

				$result = mysqli_query($db_handle, $sql);

				while ($data = mysqli_fetch_assoc($result))
				{

					echo "<br><p><b><a href='" .$data['lien'] ."'>" .$data['titre'] ."</a></b><br>";
					echo $data['info'] ."</p>";
					echo "<br><br>";

				}

			}
		}

	}



}
echo "</div>"



?>