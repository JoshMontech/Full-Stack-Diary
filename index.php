<? include("login.php"); ?>

<form method="post">
	<input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>" />
	<input type="password" name="password" value="<?php echo addslashes($_POST['password']); ?>" />
	<input type="submit" name="submit" value="Sign Up" />
</form>

<form method="post">
	<input type="email" name="loginEmail" id="loginEmail" value="<?php echo addslashes($_POST['email']); ?>" />
	<input type="password" name="loginPassword" value="<?php echo addslashes($_POST['password']); ?>" />
	<input type="submit" name="submit" value="Log In" />
</form>
