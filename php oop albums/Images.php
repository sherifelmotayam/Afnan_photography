<?php
declare(strict_types=1);
include 'class-autoloaded.php';
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
    $images=new images();
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
