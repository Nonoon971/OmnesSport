<?php
	include'login.php'
?>
<?php if(!isset($_SESSION['nom'])):  ?>
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
	  </table>
	  <span><?php echo $invalid; ?></span>
	 </form>
	</div>
</div>

<?php else: ?>
	<div class="alert alert-success" role="alert">
		Bonjour et bienvenue sur votre compte <?php echo $_SESSION['prenom'] ."&nbsp;" .$_SESSION['nom']; ?>
	</div>

<?php endif; ?>

	
