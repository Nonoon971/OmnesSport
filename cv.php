<?php
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
	$nom = $xml->createElement("nom","Scotto");
	$entete->appendChild($nom);
	//prenom
	$prenom = $xml->createElement("prenom","Léo");
	$entete->appendChild($prenom);	
	//date de naissance
	$ddn = $xml->createElement("ddn","18/07/1985");
	$entete->appendChild($ddn);	
	//nationalite
	$nationalite = $xml->createElement("nationalite","Française");
	$entete->appendChild($nationalite);
	//situation maritale
	$situationMaritale = $xml->createElement("situationMaritale","Célibataire");
	$entete->appendChild($situationMaritale);
	//permis
	$permis = $xml->createElement("permis","Permis B");
	$entete->appendChild($permis);
	//mail
	$mail = $xml->createElement("mail","leo@monmail.fr");
	$entete->appendChild($mail);
	//photo
	/*$photo = $xml->createElement("photo","coach.png");
	$entete->appendChild($photo);*/

	//situation actuelle
	$situationActuelle = $xml->createElement("situationActuelle","Coach sportif au Basic Fit d'Argenteuil");
	$cv->appendChild($situationActuelle);

	//diplomes
	$diplomes = $xml->createElement("diplomes");
	$cv->appendChild($diplomes);
	//dans diplomes----------------------------------------
	//diplome
	$diplome = $xml->createElement("diplome");
	$diplomes->appendChild($diplome);
	//dans diplome------------------------------------------
	//annee
	$anneeD = $xml->createElement("annee","2000");
	$diplome->appendChild($anneeD);
	//intitule
	$intituleD = $xml->createElement("intitule","Baccalauréat Economique et Sociale");
	$diplome->appendChild($intituleD);

	//stages
	$stages = $xml->createElement("stages");
	$cv->appendChild($stages);
	//dans stages------------------------------
	//stage
	$stage = $xml->createElement("stage");
	$stages->appendChild($stage);
	//dans stage-------------------------------
	//annee
	$anneeS = $xml->createElement("annee","2004");
	$stage->appendChild($anneeS);
	//titre
	$titreS = $xml->createElement("titre","Stagiaire salle de sport");
	$stage->appendChild($titreS);
	//description
	$descriptionS = $xml->createElement("description","Je travaillais en tant qu'assistant coach de sport personnel dans une salle de sport à Argenteuil. J'aidais tout type de personne en fonction de leur demande, du type d'exercice voulu et le type de forfait.");
	$stage->appendChild($descriptionS);

	//competences
	$competences = $xml->createElement("competences");
	$cv->appendChild($competences);
	//dans competences----------------------------------
	//competence
	$competence = $xml->createElement("competence");
	$competences->appendChild($competence);
	//dans competence--------------------------------
	//titre
	$titreC = $xml->createElement("titre","Stagiaire salle de sport");
	$competence->appendChild($titreC);
	//description
	$descriptionC = $xml->createElement("description","Judo, Tennis, Badminton et football");
	$competence->appendChild($descriptionC);

	//langues
	$langues = $xml->createElement("langues");
	$cv->appendChild($langues);
	//dans langues------------------------
	//langue
	$langue = $xml->createElement("langue");
	$langues->appendChild($langue);
	//dans langue------------------------------
	//intitule
	$intituleL = $xml->createElement("intitule","Anglais");
	$langue->appendChild($intituleL);
	//niveau
	$niveau = $xml->createElement("niveau","Bilingue");
	$langue->appendChild($niveau);

	//loisirs
	$loisirs = $xml->createElement("loisirs");
	$cv->appendChild($loisirs);
	//dans loisirs---------------------------------
	//loisir
	$loisir = $xml->createElement("loisir","Surf");
	$loisirs->appendChild($loisir);















	echo "<xmp>" . $xml->saveXML()."</xmp>";
	$xml->save("zebi.xml") or die("Error, Unable to create XML file");


?>
