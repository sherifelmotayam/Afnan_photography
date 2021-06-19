<?php
declare(strict_types=1);
include 'class-autoloaded.php';
include 'Main_Nav.php';
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>  Afnan's Images </title>
    <link href="Images.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <?php
    $images=new images('data','data','data');
    $getdata=$images->readimages($_GET['id']);
    foreach ($getdata as $data)
     {
   ?>
    <div class="container">
        <img onmouseover="preview.src=img1.src" name="img1" src="<?php echo("imagesGallery/".$data['Image_Name']) ?>" alt="image" />

    </div>
    <?php
     }
     ?>
</body>

</html>
