<?php 
declare(strict_types=1 );
session_start();
include 'includes/class-autoloaded.php';
include 'Main_Nav.php';

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Login_Form.css">
</head>
<body>
 <form action="Login.php" method="post" enctype="multipart/form-data">
 	 	<img src="login.png" alt="Login Image" style="		width: 120px;
		height: 120px;
		margin-left: 130px;">
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

	$admin=new Admin("","","","","","",""); 
	if($admin->login($_POST['username'],$_POST['pass'])==true)
	{

	header('location: View%20Profile.php');
	}
	else {
		
		print "<script>alert ('Sorry man try again') </script>";

	}

}

?>