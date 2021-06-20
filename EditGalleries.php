<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new gallery("a","a","a");
$test->edit();
?>
<head>
	<link rel="stylesheet" type="text/css" href="Edit_Form.css">
</head>
<div>
	<h3>Edit Gallery Data</h3>
	<form action="EditGallery_Data.php" method="POST" style="margin-left: 900px;">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>" style="margin-left: 80px;">
		<br>
		<label>Image Gallery</label>
		<input type="text" name="Image_Gallery" value="<?php echo $test->getImageGallery(); ?>">
		<br>
		<label>Name Gallery</label>
		<input type="text" name="Name_Gallery" value="<?php echo $test->getNameGallery(); ?>">
		<br>
		<label>Album ID</label>
		<input type="text" name="Album_ID" value="<?php echo $test->getIDAlbum(); ?>"  style="margin-left: 35px;">
		<br>
		<input type="submit" name="submit" value="Submit" class="button">
	</form>
</div>

