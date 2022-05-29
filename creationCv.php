<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Créer ton CV</title>
	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
 	</script>
 	<script type= "text/javascript">
 $(document).ready(function(){

 //---------------DIPLOMES------------------------------
$("#valideDiplome").click(function() {
	if($('#nbDiplome').val()==1){
		 $("#dateD1").show();
		 $("#nomD1").show();

		 $("#dateD2").hide();
		 $("#nomD2").hide();		 
		 $("#dateD3").hide();
		 $("#nomD3").hide();
	}
	if($('#nbDiplome').val()==2){
		 $("#dateD1").show();
		 $("#nomD1").show();		 
		 $("#dateD2").show();
		 $("#nomD2").show();

		 $("#dateD3").hide();
		 $("#nomD3").hide();		
	}
	if($('#nbDiplome').val()==3){
		 $("#dateD1").show();
		 $("#nomD1").show();		 
		 $("#dateD2").show();
		 $("#nomD2").show();
		 $("#dateD3").show();
		 $("#nomD3").show();		
	}
    
});

//-----------------------STAGES----------------------------------
$("#valideStage").click(function() {
	if($('#nbStage').val()==1){
		 $("#anneeS1").show();
		 $("#posteS1").show();		 
		 $("#descriptionS1").show();

		 $("#anneeS2").hide();
		 $("#posteS2").hide();		 
		 $("#descriptionS2").hide();		
		  $("#anneeS3").hide();
		 $("#posteS3").hide();		 
		 $("#descriptionS3").hide();
	}
	else if($('#nbStage').val()==2){
		 $("#anneeS1").show();
		 $("#posteS1").show();		 
		 $("#descriptionS1").show();		 
		 $("#anneeS2").show();
		 $("#posteS2").show();		 
		 $("#descriptionS2").show();

		  $("#anneeS3").hide();
		 $("#posteS3").hide();		 
		 $("#descriptionS3").hide();		
	}
	else if($('#nbStage').val()==3){
		 $("#anneeS1").show();
		 $("#posteS1").show();		 
		 $("#descriptionS1").show();		 
		 $("#anneeS2").show();
		 $("#posteS2").show();		 
		 $("#descriptionS2").show();		
		  $("#anneeS3").show();
		 $("#posteS3").show();		 
		 $("#descriptionS3").show();		
	}  
});

//----------------------CCOMPETENCES--------------------------------
$("#valideCompetence").click(function() {
	if($('#nbCompetence').val()==1){
		 $("#competenceC1").show();
		 $("#descriptionC1").show();

		 $("#competenceC2").hide();
		 $("#descriptionC2").hide();		 
		 $("#competenceC3").hide();
		 $("#descriptionC3").hide();
	}
	else if($('#nbCompetence').val()==2){
		 $("#competenceC1").show();
		 $("#descriptionC1").show();		 
		 $("#competenceC2").show();
		 $("#descriptionC2").show();

		 $("#competenceC3").hide();
		 $("#descriptionC3").hide();		
	}
	else if($('#nbCompetence').val()==3){
		 $("#competenceC1").show();
		 $("#descriptionC1").show();		 
		 $("#competenceC2").show();
		 $("#descriptionC2").show();		 
		 $("#competenceC3").show();
		 $("#descriptionC3").show();		
	}
    
});


//-----------------------------LANGUES-------------------------------------
$("#valideLangue").click(function() {
	if($('#nbLangue').val()==1){
		 $("#langue1").show();
		 $("#niveau1").show();

		 $("#langue2").hide();
		 $("#niveau2").hide();		 
		 $("#langue3").hide();
		 $("#niveau3").hide();		 
		 $("#langue4").hide();
		 $("#niveau4").hide();		 
	 

	}
	else if($('#nbLangue').val()==2){
		 $("#langue1").show();
		 $("#niveau1").show();
		 $("#langue2").show();
		 $("#niveau2").show();	

		 $("#langue3").hide();
		 $("#niveau3").hide();		 
		 $("#langue4").hide();
		 $("#niveau4").hide();		
	}
	else if($('#nbLangue').val()==3){
		 $("#langue1").show();
		 $("#niveau1").show();
		 $("#langue2").show();
		 $("#niveau2").show();			 	 
		 $("#langue3").show();
		 $("#niveau3").show();

		 $("#langue4").hide();
		 $("#niveau4").hide();		
	}	
	else if($('#nbLangue').val()==4){
		 $("#langue1").show();
		 $("#niveau1").show();
		 $("#langue2").show();
		 $("#niveau2").show();			 	 
		 $("#langue3").show();
		 $("#niveau3").show();
		 $("#langue4").show();
		 $("#niveau4").show();			
	}
    
});

//-----------------------------LOISIRS-------------------------------------
$("#valideLoisir").click(function() {
	if($('#nbLoisir').val()==1){
		 $("#loisir1").show();

		 $("#loisir2").hide();
		 $("#loisir3").hide();
		 $("#loisir4").hide();
		 $("#loisir5").hide();		
	}
	else if($('#nbLoisir').val()==2){
		 $("#loisir1").show();
		 $("#loisir2").show();

		 $("#loisir3").hide();
		 $("#loisir4").hide();
		 $("#loisir5").hide();			
	}
	else if($('#nbLoisir').val()==3){
		 $("#loisir1").show();
		 $("#loisir2").show();
		 $("#loisir3").show();

		 $("#loisir4").hide();
		 $("#loisir5").hide();		
	}	
	else if($('#nbLoisir').val()==4){
		 $("#loisir1").show();
		 $("#loisir2").show();
		 $("#loisir3").show();
		 $("#loisir4").show();

		 $("#loisir5").hide();			
	}	
	else if($('#nbLoisir').val()==5){
		 $("#loisir1").show();
		 $("#loisir2").show();
		 $("#loisir3").show();
		 $("#loisir4").show();
		 $("#loisir5").show();		
	}
    
});


 });
</script>
</head>
<body>
	<h1 align="center" id="titre">Créer un CV</h1>
        <form action="sauvegardeCv.php" method="post">
			<h3 align="center" id="titre1">INFORMATIONS PRINCIPALES</h3>
            <table border="1" id="bleta" align="center">
                <tr>
                    <td>Nom :</td>
                    <td><input type="text" name="nom" required="required"></td>
                </tr>
                <tr>
                    <td>Prénom :</td>
                    <td><input type="text" name="prenom" required="required"></td>
                </tr>
                <tr>
                    <td>Date de Naissance :</td>
                    <td><input type="date" name="ddn"></td>
                </tr>
                <tr>
                    <td>Nationalité :</td>
                    <td><input type="text" name="nationalite"></td>
                </tr>
                <tr>
                    <td>Situation maritale :</td>
                    <td><input type="text" name="situationMaritale"></td>
                </tr>
                <tr>
                    <td>Permis :</td>
                    <td><input type="text" name="permis"></td>
                </tr>
                <tr>
                    <td>Mail :</td>
                    <td><input type="email" name="mail"></td>
                </tr>
                <tr>
                    <td>Situation Actuelle :</td>
                    <td><input type="text" name="situationActuelle"></td>
                </tr>
                <tr>
                	<td colspan="2" align="center"><input type="file" name="photo" accept="image/png, image/jpeg"></td>
                </tr>       
            </table>




            <!---------------------DIPLOMES------------------------------------>

            <h3 align="center" id="titre2">DIPLÔMES</h3>
            <table align="center" border="1" id="tableDiplome">
	            <tr>
	                <td align="center">Nombre de diplôme :</td>
	                <td align="center"><input type="number" min="1" max="3" id="nbDiplome"><input type="button" value="Valider" id="valideDiplome"></td>
	            </tr>
	            <tr style="display:none" id="dateD1">
	                <td>Date :</td>
	                <td><input type="date" name="anneeD1"></td>
	             </tr>
	            <tr style="display:none" id="nomD1">
	                <td>Nom du diplome :</td>
	                <td><input type="text" name="intituleD1"></td>
	            </tr>
	            <tr style="display:none" id="dateD2">
	                <td>Date :</td>
	                <td><input type="date" name="anneeD2"></td>
	             </tr>
	            <tr style="display:none" id="nomD2">
	                <td>Nom du diplome :</td>
	                <td><input type="text" name="intituleD2"></td>
	            </tr>
	            <tr style="display:none" id="dateD3">
	                <td>Date :</td>
	                <td><input type="date" name="anneeD3"></td>
	             </tr>
	            <tr style="display:none" id="nomD3">
	                <td>Nom du diplome :</td>
	                <td><input type="text" name="intituleD3"></td>
	            </tr>
	        </table>



	        <!-----------------------------STAGES--------------------------------->

            <h3 align="center" id="titre3">STAGES</h3>
            <table align="center" border="1" id="tableStage">
	            <tr>
	                <td align="center">Nombre de stage :</td>
	                <td align="center"><input type="number" min="1" max="3" id="nbStage"><input type="button" value="Valider" id="valideStage"></td>
	            </tr>
	            <tr style="display:none" id="anneeS1">
	                <td>Année :</td>
	                <td><input type="number" name="anneeS01"></td>
	             </tr>
	            <tr style="display:none" id="posteS1">
	                <td>Poste du stage :</td>
	                <td><input type="text" name="titreS1"></td>
	            </tr>
	            <tr style="display:none" id="descriptionS1">
	                <td>Description :</td>
	                <td><input type="text" name="descriptionS01"></td>
	            </tr>
				
				<tr style="display:none" id="anneeS2">
	                <td>Année :</td>
	                <td><input type="number" name="anneeS02"></td>
	             </tr>
	            <tr style="display:none" id="posteS2">
	                <td>Poste du stage :</td>
	                <td><input type="text" name="titreS2"></td>
	            </tr>
	            <tr style="display:none" id="descriptionS2">
	                <td>Description :</td>
	                <td><input type="text" name="descriptionS02"></td>
	            </tr>

				<tr style="display:none" id="anneeS3">
	                <td>Année :</td>
	                <td><input type="number" name="anneeS03"></td>
	             </tr>
	            <tr style="display:none" id="posteS3">
	                <td>Poste du stage :</td>
	                <td><input type="text" name="titreS3"></td>
	            </tr>
	            <tr style="display:none" id="descriptionS3">
	                <td>Description :</td>
	                <td><input type="text" name="descriptionS03"></td>
	            </tr>
	        </table>
        




	        <!--------------------------------COMPETENCES----------------------------------------->

	        <h3 align="center" id="titre3">COMPETENCES</h3>
            <table align="center" border="1" id="tableCompetence">
	            <tr>
	                <td align="center">Nombre de Compétence :</td>
	                <td align="center"><input type="number" min="1" max="3" id="nbCompetence"><input type="button" value="Valider" id="valideCompetence"></td>
	            </tr>
	            <tr style="display:none" id="competenceC1">
	                <td>Type de compétences :</td>
	                <td><input type="text" name="competenceC01"></td>
	             </tr>
	            <tr style="display:none" id="descriptionC1">
	                <td>Description :</td>
	                <td><input type="text" name="descriptionC01"></td>
	            </tr>

	            <tr style="display:none" id="competenceC2">
	                <td>Type de compétences :</td>
	                <td><input type="text" name="competenceC02"></td>
	             </tr>
	            <tr style="display:none" id="descriptionC2">
	                <td>Description :</td>
	                <td><input type="text" name="descriptionC02"></td>
	            </tr>

	            <tr style="display:none" id="competenceC3">
	                <td>Type de compétences :</td>
	                <td><input type="text" name="competenceC03"></td>
	             </tr>
	            <tr style="display:none" id="descriptionC3">
	                <td>Description :</td>
	                <td><input type="text" name="descriptionC03"></td>
	            </tr>
	        </table>


	        <!-------------------------------------LANGUES---------------------------------------------->

	        <h3 align="center" id="titre3">LANGUES</h3>
            <table align="center" border="1" id="tableLangue">
	            <tr>
	                <td align="center">Nombre de langue :</td>
	                <td align="center"><input type="number" min="1" max="4" id="nbLangue"><input type="button" value="Valider" id="valideLangue"></td>
	            </tr>
	            <tr style="display:none" id="langue1">
	                <td>Langue :</td>
	                <td><input type="text" name="langue01"></td>
	            </tr>
	            <tr style="display:none" id="niveau1">
	                <td>Niveau :</td>
	                <td><input type="text" name="niveau01"></td>
	             </tr>

	            <tr style="display:none" id="langue2">
	                <td>Langue :</td>
	                <td><input type="text" name="langue02"></td>
	            </tr>
	            <tr style="display:none" id="niveau2">
	                <td>Niveau :</td>
	                <td><input type="text" name="niveau02"></td>
	             </tr>

	            <tr style="display:none" id="langue3">
	                <td>Langue :</td>
	                <td><input type="text" name="langue03"></td>
	            </tr>
	            <tr style="display:none" id="niveau3">
	                <td>Niveau :</td>
	                <td><input type="text" name="niveau03"></td>
	             </tr>

	            <tr style="display:none" id="langue4">
	                <td>Langue :</td>
	                <td><input type="text" name="langue04"></td>
	            </tr>
	            <tr style="display:none" id="niveau4">
	                <td>Niveau :</td>
	                <td><input type="text" name="niveau04"></td>
	             </tr>
	        </table>



	        <!----------------------------------------LOISIRS-------------------------------------------->

	    <h3 align="center" id="titre4">LOISIRS</h3>
	            <table align="center" border="1" id="tableDiplome">
		            <tr>
		                <td align="center">Nombre de loisir :</td>
		                <td align="center"><input type="number" min="1" max="5" id="nbLoisir"><input type="button" value="Valider" id="valideLoisir"></td>
		            </tr>
		            <tr style="display:none" id="loisir1">
		                <td>Loisir : </td>
		                <td><input type="text" name="loisir01"></td>
		            </tr>
		            <tr style="display:none" id="loisir2">
		                <td>Loisir : </td>
		                <td><input type="text" name="loisir02"></td>
		            </tr>
		            <tr style="display:none" id="loisir3">
		                <td>Loisir : </td>
		                <td><input type="text" name="loisir03"></td>
		            </tr>
		            <tr style="display:none" id="loisir4">
		                <td>Loisir : </td>
		                <td><input type="text" name="loisir04"></td>
		            </tr>
		            <tr style="display:none" id="loisir5">
		                <td>Loisir : </td>
		                <td><input type="text" name="loisir05"></td>
		            </tr>
		        </table>

		        <br/>
		        <br/>
		        <table align="center">
		        	<tr>
		        		<td>
		        	        <input type="submit" name="submit" value="Enregistrer les informations">
		        		</td>
		        	</tr>
		        </table>

      </form>
</body>
</html>