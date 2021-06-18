<?php 
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Main_Nav.php';

?>
<html>
    <head>
          <link rel="stylesheet" type="text/css" href="login.css">
    </head>
 <form action="Login.php" method="post" enctype="multipart/form-data">
 	 	<img src="login.png" alt="Login Image">
 	<div class="ab">
	<label>UserName  </label><br>
	<input type="text" name="username" placeholder="Enter Your User Name here" required><br>
	<label>Password   </label><br>
	<input type="password" name="pass" placeholder="Enter Your Password here" required><br>
	 <input type = "submit" name = "Login" value = "Login" class="submit">
	</div>
</form>
</html>
<?php

if(isset($_POST['Login']))
{

	$admin=new admin(); 
	$admin->login($_POST['username'],$_POST['pass']);

}

?>