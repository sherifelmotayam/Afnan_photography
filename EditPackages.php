<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new Packages();
$test->edit();
?>
<head>
	<link rel="stylesheet" type="text/css" href="Edit_Form.css">
</head>
<body>
<h1>Edit Package Data</h1>
<div class="form">
	<form action="EditPackages_Data.php" method="POST" style="margin-left:900px ;">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>" style="margin-left:65px ;">
		<br>
		<label>ID Type</label>
		<input type="text" name="ID_Type" value="<?php echo $test->Type(); ?>" style="margin-left:28px ;">
		<br>
		<label>Description</label>
		<input type="text" name="Description" value="<?php echo $test->getDescription(); ?>">
		<br>
		<label>City</label>
		<input type="text" name="City" value="<?php echo $test->getCity(); ?>" style="margin-left:52px ;">
		<br>
		<label>Price</label>
		<input type="text" name="Price" value="<?php echo $test->getPrice(); ?>" style="margin-left:45px ;">
		<br>
		<input type="submit" name="submit" value="Submit" class="button">
	</form>
</div>
</body>
