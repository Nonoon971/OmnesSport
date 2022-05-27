<?php 
session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
 <title>Inscription</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="cssheaderFooter.css">
 <script src="./popup.js" defer></script>
 <style type="text/css">
  #test:hover ul li
  {
    display: block;
    left: 190px;  
    bottom: 28px;   
    
  }
  #nav li:hover ul li
  {
    float: none;
    z-index: 999;
  }
  body
  {
    background-image: url('inscription.jpg');
    background-size: cover;
  }
  .container
  {
    width: 50%;
    color: black;

    text-shadow: 1px 1px 3px pink;

  }
</style>
</head>

<body>

  <?php include('header.php'); ?>
  
  <?php include('verifInscription.php'); ?>
</body>
</html>