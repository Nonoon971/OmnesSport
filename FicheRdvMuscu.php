<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="test.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>
	$(document).ready(function() {
        var ligneID;
        var colonneID;
		$('#tabRdv').find('td').click(function(){
            var cellId = $(this).attr("id");
            var HrSelect = $('#'+ cellId ).text();
            if(parseInt(cellId)%10==2){
            	alert("Mercredi "+ HrSelect)
            }
            
            
		});
		
       
	});

	</script>
	<title>OmnesSport</title>
</head>
<body>
	<?php require('header.php')?>

	<div id ="section">
		<p> Ca c'est Mon CV !!!!!</p> 

		<?php  $coachName='Personne' ?>
		<?php require('tableauRDV.php')?>



	</div>
</body>
</html>