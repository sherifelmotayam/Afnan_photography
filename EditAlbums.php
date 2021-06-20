<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new album("a","a");
$test->edit();
?>
<head>
	<link rel="stylesheet" type="text/css" href="Edit_Form.css">
</head>
<div>
	<div class="title">
	<h1>Edit Album Data</h1>
	</div>
	<form action="EditAlbum_Data.php" method="POST" style="margin-left: 870px;">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>" Style="margin-left:80px ;">
		<br>
		<label>Album Name</label>
		<input type="text" name="AlbumName" value="<?php echo $test->getAlbumName(); ?>">
		<br>
		<label>Image</label>
		<input type="text" name="Image" value="<?php echo $test->getImage(); ?>"Style="margin-left:50px ;">
		<br>
		<input type="submit" name="submit" value="Submit" class="Button">
	</form>
</div>