<?php
	/*$xml = new DomDocument('1.0','utf-8');
	$xml->formatOutput=true;
	$xml->preserveWhiteSpace=false;
	//create element using createElement()
	//append child to parent using appendChild()*/
	$proc = new XSLTProcessor;
	$xml = new DOMDocument;
	$xml->load('zebi.xml');
	$xsl = new DOMDocument;
	$xsl->load('cv.xsl');
	$proc->importStyleSheet($xsl); // attachement des règles xsl
	if($html= $proc->transformToXML($xml)){
		echo $html;
	}else{
		trigger_error('La transformation XSL à échouée.', E_USER_ERROR);
	}



	/*$books=$xml->createElement("books");
	$xml->appendChild($books);
	//parent->appendChild(child);

	$book = $xml->createElement("book");
	$book->setAttribute("id",1);
	$books->appendChild($book);

	$name = $xml->createElement("name","java");
	$book->appendChild($name);
	$price = $xml->createElement("price","200");
	$book->appendChild($price);

	echo "<xmp>" . $xml->saveXML()."</xmp>";
	$xml->save("zebi.xml") or die("Error, Unable to create XML file");*/


?>
