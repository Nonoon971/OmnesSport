<?php  

if(isset($_POST['cvCoach']))
{
	$proc = new XSLTProcessor;
	$xml = new DOMDocument;
	$photo = isset($_POST["name"])? $_POST["name"] : "";
	$xml->load($photo .".xml");
	$xsl = new DOMDocument;
	$xsl->load('cv.xsl');
				$proc->importStyleSheet($xsl); // attachement des règles xsl
				if($html= $proc->transformToXML($xml)){
					echo $html;
				}else{
					trigger_error('La transformation XSL à échouée.', E_USER_ERROR);
				}
			}
		?>