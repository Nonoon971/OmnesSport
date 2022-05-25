<?php
	$xml = new DomDocument('1.0','utf-8');
	$xml->formatOutput=true;
	$xml->preserveWhiteSpace=false;
	//create element using createElement()
	//append child to parent using appendChild()*/
	$test = '<?xml version="1.0" encoding="UTF-8"?>';
	$test .= '<?xml-stylesheet type="text/xsl" href="cv.xsl"?>';
	$test .= '<items>';
	$test .= 'contenu de la balise';
	$test .= '</items>';
	echo $test->$xml;
		$xml->save("lala.xml") or die("errrrrooooorrrr");
	/*$temp=$xml->createElement("temp");
	$xml->appendChild($temp);

	$books=$xml->createElement("books");
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
