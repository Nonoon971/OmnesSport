<?php
	//--------------------------------RECUPERATION INFORMATIONS PRINCIPALES-----------------------------------------
	$Nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$Prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";	
	$NomBis = isset($_POST["nom"])? $_POST["nom"] : "";
	$PrenomBis = isset($_POST["prenom"])? $_POST["prenom"] : "";
	$Ddn = isset($_POST["ddn"])? $_POST["ddn"] : "";
	$Nationalite = isset($_POST["nationalite"])? $_POST["nationalite"] : "";
	$SituationMaritale = isset($_POST["situationMaritale"])? $_POST["situationMaritale"] : "";
	$Permis = isset($_POST["permis"])? $_POST["permis"] : "";
	$Mail = isset($_POST["mail"])? $_POST["mail"] : "";

	//----------------------------------RECUPERATION DES COMPTEURS------------------------------------------------------
	$nbDiplome = isset($_POST["nbDiplome"])? $_POST["nbDiplome"] : "";
	$NbStage = isset($_POST["nbStage"])? $_POST["nbStage"] : "";
	$NbCompetence = isset($_POST["nbCompetence"])? $_POST["nbCompetence"] : "";
	$NbLangue = isset($_POST["nbLangue"])? $_POST["nbLangue"] : "";
	$NbLoisir = isset($_POST["nbLoisir"])? $_POST["nbLoisir"] : "";

	//--------------------------------RECUPERATION DIPLOMES-------------------------------------------
	//annee
	$AnneeD1 = isset($_POST["anneeD1"])? $_POST["anneeD1"] : "";
	$AnneeD2 = isset($_POST["anneeD2"])? $_POST["anneeD2"] : "";
	$AnneeD3 = isset($_POST["anneeD3"])? $_POST["anneeD3"] : "";
	//nom du diplome
	$IntituleD1 = isset($_POST["intituleD1"])? $_POST["intituleD1"] : "";
	$IntituleD2 = isset($_POST["intituleD2"])? $_POST["intituleD2"] : "";
	$IntituleD3 = isset($_POST["intituleD3"])? $_POST["intituleD3"] : "";

	//--------------------------------RECUPERATION STAGES--------------------------------------------
	//annee
	$AnneeS01 = isset($_POST["anneeS01"])? $_POST["anneeS01"] : "";
	$AnneeS02 = isset($_POST["anneeS02"])? $_POST["anneeS02"] : "";
	$AnneeS03 = isset($_POST["anneeS03"])? $_POST["anneeS03"] : "";
	//poste du stage
	$TitreS1 = isset($_POST["titreS1"])? $_POST["titreS1"] : "";
	$TitreS2 = isset($_POST["titreS2"])? $_POST["titreS2"] : "";
	$TitreS3 = isset($_POST["titreS3"])? $_POST["titreS3"] : "";
	//description
	$DescriptionS01 = isset($_POST["descriptionS01"])? $_POST["descriptionS01"] : "";
	$DescriptionS02 = isset($_POST["descriptionS02"])? $_POST["descriptionS02"] : "";
	$DescriptionS03 = isset($_POST["descriptionS03"])? $_POST["descriptionS03"] : "";

	//------------------------------RECUPERATION COMPETENCES--------------------------------------------
	//type de competence
	$CompetenceC01 = isset($_POST["competenceC01"])? $_POST["competenceC01"] : "";
	$CompetenceC02 = isset($_POST["competenceC02"])? $_POST["competenceC02"] : "";
	$CompetenceC03 = isset($_POST["competenceC03"])? $_POST["competenceC03"] : "";
	//description
	$DescriptionC01 = isset($_POST["descriptionC01"])? $_POST["descriptionC01"] : "";
	$DescriptionC02 = isset($_POST["descriptionC02"])? $_POST["descriptionC02"] : "";
	$DescriptionC03 = isset($_POST["descriptionC03"])? $_POST["descriptionC03"] : "";

	//-----------------------------------RECUPERATION LANGUES----------------------------------------
	//langue
	$Langue01 = isset($_POST["langue01"])? $_POST["langue01"] : "";
	$Langue02 = isset($_POST["langue02"])? $_POST["langue02"] : "";
	$Langue03 = isset($_POST["langue03"])? $_POST["langue03"] : "";
	$Langue04 = isset($_POST["langue04"])? $_POST["langue04"] : "";
	//niveau
	$niveau01 = isset($_POST["niveau01"])? $_POST["niveau01"] : "";
	$niveau02 = isset($_POST["niveau02"])? $_POST["niveau02"] : "";
	$niveau03 = isset($_POST["niveau03"])? $_POST["niveau03"] : "";
	$niveau04 = isset($_POST["niveau04"])? $_POST["niveau04"] : "";

	//-------------------------------RECUPERATION LOISIRS----------------------------------------
	//loisir
	$Loisir01 = isset($_POST["loisir01"])? $_POST["loisir01"] : "";
	$Loisir02 = isset($_POST["loisir02"])? $_POST["loisir02"] : "";
	$Loisir03 = isset($_POST["loisir03"])? $_POST["loisir03"] : "";
	$Loisir04 = isset($_POST["loisir04"])? $_POST["loisir04"] : "";
	$Loisir05 = isset($_POST["loisir05"])? $_POST["loisir05"] : "";





	//creation d'un fichier xml
	$xml = new DomDocument('1.0','utf-8');
	$xml->formatOutput=true;
	$xml->preserveWhiteSpace=false;
	//create element using createElement()
	//append child to parent using appendChild()

	//cv
	$cv=$xml->createElement("cv");
	$xml->appendChild($cv);
	//parent->appendChild(child);

	//entete
	$entete = $xml->createElement("entete");
	//$book->setAttribute("id",1);
	$cv->appendChild($entete);
	//dans entete------------------------------------------
	//nom
	$nom = $xml->createElement("nom",$Nom);
	$entete->appendChild($nom);
	//prenom
	$prenom = $xml->createElement("prenom",$Prenom);
	$entete->appendChild($prenom);	
	//date de naissance
	$ddn = $xml->createElement("ddn",$Ddn);
	$entete->appendChild($ddn);	
	//nationalite
	$nationalite = $xml->createElement("nationalite",$Nationalite);
	$entete->appendChild($nationalite);
	//situation maritale
	$situationMaritale = $xml->createElement("situationMaritale",$SituationMaritale);
	$entete->appendChild($situationMaritale);
	//permis
	$permis = $xml->createElement("permis",$Permis);
	$entete->appendChild($permis);
	//mail
	$mail = $xml->createElement("mail",$Mail);
	$entete->appendChild($mail);
	//photo
	/*$photo = $xml->createElement("photo","coach.png");
	$entete->appendChild($photo);*/

	//situation actuelle
	/*$situationActuelle = $xml->createElement("situationActuelle","Coach sportif au Basic Fit d'Argenteuil");
	$cv->appendChild($situationActuelle);*/

	//diplomes
	$diplomes = $xml->createElement("diplomes");
	$cv->appendChild($diplomes);
	//dans diplomes----------------------------------------
	//diplome
	//dans diplome------------------------------------------
	if ($AnneeD1!="" && $IntituleD1!="") { 

		$diplome1 = $xml->createElement("diplome");
		//annee
		$anneeD1 = $xml->createElement("annee",$AnneeD1);
		$diplome1->appendChild($anneeD1);
		//intitule
		$intituleD1 = $xml->createElement("intitule",$IntituleD1);
		$diplome1->appendChild($intituleD1);
		$diplomes->appendChild($diplome1);
	}
	if ($AnneeD2!="" && $IntituleD2!="") { 

		$diplome2 = $xml->createElement("diplome");
		//annee
		$anneeD2 = $xml->createElement("annee",$AnneeD2);
		$diplome2->appendChild($anneeD2);
		//intitule
		$intituleD2 = $xml->createElement("intitule",$IntituleD2);
		$diplome2->appendChild($intituleD2);
		$diplomes->appendChild($diplome2);
	}
	if ($AnneeD3!="" && $IntituleD3!="") { 
		$diplome3 = $xml->createElement("diplome");
		//annee
		$anneeD3 = $xml->createElement("annee",$AnneeD3);
		$diplome3->appendChild($anneeD3);
		//intitule
		$intituleD3 = $xml->createElement("intitule",$IntituleD3);
		$diplome3->appendChild($intituleD3);
		$diplomes->appendChild($diplome3);
	}
	

	//stages
	$stages = $xml->createElement("stages");
	$cv->appendChild($stages);
	//dans stages------------------------------
	//stage
	/*$stage2 = $xml->createElement("stage");
	$stage3 = $xml->createElement("stage");
	$stages->appendChild($stage2);
	$stages->appendChild($stage3);*/
	//dans stage-------------------------------
	if ($AnneeS01!="" && $TitreS1!="") {
		$stage1 = $xml->createElement("stage");
		//annee
		$anneeS1 = $xml->createElement("annee",$AnneeS01);
		$stage1->appendChild($anneeS1);
		//titre
		$titreS1 = $xml->createElement("titre",$TitreS1);
		$stage1->appendChild($titreS1);
		//description
		$descriptionS1 = $xml->createElement("description",$DescriptionS01);
		$stage1->appendChild($descriptionS1);
		$stages->appendChild($stage1);
	}

if ($AnneeS02!="" && $TitreS2!="") {
		$stage2 = $xml->createElement("stage");
		//annee
		$anneeS2 = $xml->createElement("annee",$AnneeS02);
		$stage2->appendChild($anneeS2);
		//titre
		$titreS2 = $xml->createElement("titre",$TitreS2);
		$stage2->appendChild($titreS2);
		//description
		$descriptionS2 = $xml->createElement("description",$DescriptionS02);
		$stage2->appendChild($descriptionS2);
		$stages->appendChild($stage2);
	}

if ($AnneeS03!="" && $TitreS3!="") {
		$stage3 = $xml->createElement("stage");
		//annee
		$anneeS3 = $xml->createElement("annee",$AnneeS03);
		$stage3->appendChild($anneeS3);
		//titre
		$titreS3 = $xml->createElement("titre",$TitreS3);
		$stage3->appendChild($titreS3);
		//description
		$descriptionS3 = $xml->createElement("description",$DescriptionS03);
		$stage3->appendChild($descriptionS3);
		$stages->appendChild($stage3);
	}
	

	//competences
	$competences = $xml->createElement("competences");
	$cv->appendChild($competences);
	//dans competences----------------------------------
	//competence
	//dans competence--------------------------------
	if ($CompetenceC01!="") {
		$competence1 = $xml->createElement("competence");
		//titre
		$titreC1 = $xml->createElement("titre",$CompetenceC01);
		$competence1->appendChild($titreC1);
		//description
		$descriptionC1 = $xml->createElement("description",$DescriptionC01);
		$competence1->appendChild($descriptionC1);
		$competences->appendChild($competence1);
	}
	if ($CompetenceC02!="") {
		$competence2 = $xml->createElement("competence");
		//titre
		$titreC2 = $xml->createElement("titre",$CompetenceC02);
		$competence2->appendChild($titreC2);
		//description
		$descriptionC2 = $xml->createElement("description",$DescriptionC02);
		$competence2->appendChild($descriptionC2);
		$competences->appendChild($competence2);
	}
	if ($CompetenceC03!="") {
		$competence3 = $xml->createElement("competence");
		//titre
		$titreC3 = $xml->createElement("titre",$CompetenceC03);
		$competence3->appendChild($titreC3);
		//description
		$descriptionC3 = $xml->createElement("description",$DescriptionC03);
		$competence3->appendChild($descriptionC3);
		$competences->appendChild($competence3);
	}


	//langues
	$langues = $xml->createElement("langues");
	$cv->appendChild($langues);
	//dans langues------------------------
	//langue
	//dans langue------------------------------
	if ($Langue01!="" && $niveau01!="") {
		$langue1 = $xml->createElement("langue");
		//intitule
		$intituleL1 = $xml->createElement("intitule",$Langue01);
		$langue1->appendChild($intituleL1);
		//niveau
		$niveau1 = $xml->createElement("niveau",$niveau01);
		$langue1->appendChild($niveau1);
		$langues->appendChild($langue1);
	}	
	if ($Langue02!="" && $niveau02!="") {
		$langue2 = $xml->createElement("langue");
		//intitule
		$intituleL2 = $xml->createElement("intitule",$Langue02);
		$langue2->appendChild($intituleL2);
		//niveau
		$niveau2 = $xml->createElement("niveau",$niveau02);
		$langue2->appendChild($niveau2);
		$langues->appendChild($langue2);
	}	
	if ($Langue03!="" && $niveau03!="") {
		$langue3 = $xml->createElement("langue");
		//intitule
		$intituleL3 = $xml->createElement("intitule",$Langue03);
		$langue3->appendChild($intituleL3);
		//niveau
		$niveau3 = $xml->createElement("niveau",$niveau03);
		$langue3->appendChild($niveau3);
		$langues->appendChild($langue3);
	}	
	if ($Langue04!="" && $niveau04!="") {
		$langue4 = $xml->createElement("langue");
		//intitule
		$intituleL4 = $xml->createElement("intitule",$Langue04);
		$langue4->appendChild($intituleL4);
		//niveau
		$niveau4 = $xml->createElement("niveau",$niveau04);
		$langue4->appendChild($niveau4);
		$langues->appendChild($langue4);
	}



	//loisirs
	$loisirs = $xml->createElement("loisirs");
	$cv->appendChild($loisirs);
	//dans loisirs---------------------------------
	if ($Loisir01!="") {
		//loisir
		$loisir1 = $xml->createElement("loisir",$Loisir01);
		$loisirs->appendChild($loisir1);	
	}	
	if ($Loisir02!="") {
		//loisir
		$loisir2 = $xml->createElement("loisir",$Loisir02);
		$loisirs->appendChild($loisir2);	
	}	
	if ($Loisir03!="") {
		//loisir
		$loisir3 = $xml->createElement("loisir",$Loisir03);
		$loisirs->appendChild($loisir3);	
	}	
	if ($Loisir04!="") {
		//loisir
		$loisir4 = $xml->createElement("loisir",$Loisir04);
		$loisirs->appendChild($loisir4);	
	}	
	if ($Loisir05!="") {
		//loisir
		$loisir5 = $xml->createElement("loisir",$Loisir05);
		$loisirs->appendChild($loisir5);	
	}


	//sauvegarde des informations en fichier XML----------------------
	//$fichier=$nom.$prenom.".xml";
	$fichier =  strtolower($PrenomBis .$NomBis.".xml");
	$xml->save($fichier) or die("Error, Unable to create XML file");


	$proc = new XSLTProcessor;
	$xsl = new DOMDocument;
	$xsl->load('cv.xsl');
	$proc->importStyleSheet($xsl); // attachement des règles xsl
	if($html= $proc->transformToXML($xml)){
		echo $html;
	}else{
		trigger_error('La transformation XSL à échouée.', E_USER_ERROR);
	}



?>