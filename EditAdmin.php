<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new Admin();
$test->edit();
?>
<head>
	<link rel="stylesheet" type="text/css" href="Edit_Form.css">
</head>
<div>
	<h1>Edit Admin Data</h1>
	<form action="EditAdmin_Data.php" method="POST">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>" style="margin-left: 65px;">
		<br>
		<label>First Name</label>
		<input type="text" name="FirstName" value="<?php echo $test->getfirstName(); ?>">
		<br>
		<label>Last Name</label>
		<input type="text" name="LastName" value="<?php echo $test->getlastName(); ?>">
		<br>
		<label>Email</label>
		<input type="text" name="Email" value="<?php echo $test->getemail(); ?>" style="margin-left: 40px;">
		<br>
		<label>Phone</label>
		<input type="text" name="Phone" value="<?php echo $test->getphonenumber(); ?>" style="margin-left: 35px;">
		<br>
		<label>Image</label>
		<input type="text" name="Image" value="<?php echo $test->getimage(); ?>" style="margin-left: 35px;">
		<br>
		<input type="submit" name="submit" value="submit" class="button">
	</form>
</div>

