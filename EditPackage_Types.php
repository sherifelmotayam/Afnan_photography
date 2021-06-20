<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new Package_Type();
$test->edit();
?>
<head>
	<link rel="stylesheet" type="text/css" href="Edit_Form.css">
</head>
<div>
	<h1 style="margin-left:930px;">Edit Package Type Data</h1>
	<form action="EditPackage_Types_Data.php" method="POST" style="margin-left: 900px;">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>" style="margin-left: 90px;">
		<br>
		<label>Package Name</label>
		<input type="text" name="PackageName" value="<?php echo $test->getPackageName(); ?>">
		<br>
		<input type="submit" name="submit" value="Submit"class="button">
	</form>
</div>

