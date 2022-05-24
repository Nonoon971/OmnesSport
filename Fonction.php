<?php  
function CheckConnection(string $email,string $mdp){

	

	$database = "omnessport";
	$db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found){
    	//$email='hugo@gmail.com';
    	//$mdp='leloup';
    	$sql="SELECT Prenom,Nom,Age,Type FROM utilisateur WHERE Email='$email' AND Mdp='$mdp'";

    	$result = mysqli_query($db_handle, $sql);

    	if (mysqli_num_rows($result) == 0) {
		//la recherche n'existe pas
		echo "membre not found";
		return null;
		}
		else{
			$data = mysqli_fetch_assoc($result);
			$User = array('Prenom' => $data['Prenom'] ,'Nom'=>$data['Nom'],'Age'=>$data['Age'],'Type'=>$data['Type']);
			return $User;
		}
    }

}
?>