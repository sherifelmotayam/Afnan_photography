<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new images("a","a","a");
$test->edit();
?>
<head>
	<link rel="stylesheet" type="text/css" href="Edit_Form.css">
</head>
<div>
	<h1>Edit Image Data</h1>
	<form action="EditImages_Data.php" method="POST" style="margin-left: 900px;">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>" style="margin-left: 110px;">
		<br>
		<label>Image Name</label>
		<input type="text" name="ImageName" value="<?php echo $test->getImageName(); ?>"style="margin-left: 38px;">
		<br>
		<label>Image Description</label>
		<input type="text" name="ImageDescription" value="<?php echo $test->getImageDescription(); ?>">
		<br>
		<label>Image Type</label>
		<input type="text" name="ImageType" value="<?php echo $test->getImageType(); ?>" style="margin-left: 48px">
		<br>
		<input type="submit" name="submit" value="Submit" class="button">
	</form>
</div>
