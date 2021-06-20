<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new UserValidation();
$test->edit();
?>
<head>
	<link rel="stylesheet" type="text/css" href="Edit_Form.css">
</head>
<div>
	<h1>Edit Booking Data</h1>
	<form action="EditBook_Data.php" method="POST" style="margin-left: 850px;">
<label>ID</label>
<input type="text" name="ID" value="<?php echo $test->ID; ?>" style="margin-left: 62px;">
<br>
<label>First Name</label>
<input type="text" name="FirstName" value="<?php echo $test->getFirstName(); ?>">
<br>
<label>Last Name</label>
<input type="text" name="LastName" value="<?php echo $test->getLastName(); ?>">
<br>
<label>Date</label>
<input type="Date" name="Date" value="<?php echo $test->getDate(); ?>" style="margin-left: 44px;">
<br>
<label>Time</label>
<input type="Time" name="Time" value="<?php echo $test->getTime(); ?>" style="margin-left: 44px;">
<br>
<label>City</label>
<input type="text" name="City" value="<?php echo $test->getCity(); ?>" style="margin-left: 50px;">
<br>
<label>Package</label>
<input type="text" name="Package" value="<?php echo $test->getPackage(); ?>" style="margin-left: 15px;">
<br>
<label>Phone</label>
<input type="text" name="Phone" value="<?php echo $test->getPhone(); ?>" style="margin-left: 30px;">
<br>
<label>Comment</label>
<input type="text" name="Comment" value="<?php echo $test->getComment(); ?>" style="margin-left: 10px;">
<br>
<input type="submit" name="submit" value="submit" class="button">
</form>
</div>

