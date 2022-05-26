<?php
	include'login.php'
?>
<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login">
	 <form action="" method="post">
	  <table border="1">
	    <td>Email</td>
	    <td><input type="text" name="eml"></td>
	   </tr>
	   <tr>
	    <td>Mdp</td>
	    <td><input type="text" name="pwd"></td>
	   </tr>
	    <td colspan="2" align="center">
	     <input type="submit" value="login" name="submit">
	    </td>
	   </tr>
	  </table>
	  <span><?php echo $invalid; ?></span>
	 </form>
	</div>
	
	</body>
	</html>