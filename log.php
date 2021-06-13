<?php 
include 'Main_Nav.php';
require_once('database_Connect.php');
class Login extends dbConnect
{
	public $user;
	public $pass;
	public function checker($user,$pass)
	{
		$this->user=$user;
		$this->pass=$pass;
		$sql="select Username , Password from `admin` where user='$Username' and pass='$Password'";
       	$s=$this->connect()->query($sql);
		if($user==$row["Username"]&&$pass==$row["Password"])
		{
				
		}
		else
		{
			echo "Uncorrect UserName or Password";
			echo "$user";
			echo "<br>";
			echo "$pass";
		}

	}
}

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
$check=new login();
$check->checker($_POST['username'],$_POST['pass']);
?>