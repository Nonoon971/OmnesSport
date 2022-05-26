<?php
	include'login.php'
?>
<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="login">
	<div class="container">
  		<h2>Se connecter à un compte deja existant</h2>
	 <form action="" method="post">
	  <table border="1">
	  	<div class="form-group">
      		<label for="email">Email:</label>
      		<input type="email" class="form-control" name="eml" placeholder="Enter email">
    	</div>
    	<div class="form-group">
      		<label for="pwd">Password:</label>
      		<input type="password" class="form-control" name="pwd" placeholder="Enter password">
    	</div>
    		<div class="checkbox">
      		<label><input type="checkbox"> Remember me</label>
    	</div>
	    <td colspan="3" align="center">
	     <input type="submit" value="Se connecter" name="submit">
	    </td>
	   </tr>
	  </table>
	  <span><?php echo $invalid; ?></span>
	 </form>
	</div>
</div>

	</body>
	</html>

	
