<?php 


//identifier BDD
$database = "omnessport";
//connectez-vous dans BDD
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);


//declaration des variables
$PRE = isset($_POST["pre"])? $_POST["pre"] : "";
$NOM = isset($_POST["nom"])? $_POST["nom"] : "";
$AGE = isset($_POST["age"])? $_POST["age"] : "";
$TYPE = isset($_POST["type"])? $_POST["type"] : "";
$EML = isset($_POST["eml"])? $_POST["eml"] : "";
$PWD = isset($_POST["pwd"])? $_POST["pwd"] : "";
$ADRESSE = isset($_POST["adresse"])? $_POST["adresse"] : "";
$TEL = isset($_POST["tel"])? $_POST["tel"] : "";
$PROF = isset($_POST["prof"])? $_POST["prof"] : "";


$req="INSERT INTO utilisateur (Prenom,Nom,Age,Type,Email,Mdp,Adresse,Tel,Profession) values ( '$PRE','$NOM','$AGE','$TYPE','$EML','$PWD','$ADRESSE','$TEL','$PROF')";

$res=mysqli_query($db_handle,$req); 
echo "<p>Add successful.</p>";
header("location: formulaire.html");
?>