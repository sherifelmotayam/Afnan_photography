<?php
declare(strict_types=1);
include 'class-autoloaded.php';
include 'Main_Nav.php';
 ?>
<html>
<title> Afnan's Gallery </title>

<head>
    <link href="ALBUMS.css" type="text/css" rel="stylesheet">
</head>

<body>
<h1 class="tit"> Gallery </h1>
    <?php
   $gallery=new gallery();
   $array=$gallery->viewgallery($_GET['id']);
   foreach ($array as $data)
    {
   ?>


    <div class="responsive">
        <div class="gallery">
            <a href="Images.php?id=<?php echo $data['ID'];?>">
                <img src="<?php echo ("imagesGallery/".$data['ImageGallery']) ?>" width="400" height="300">
            </a>
            <div class="desc"> <?php echo ($data['NameGallery']) ?> </div>
        </div>
    </div>


    <?php

}
 ?>
</body>

</html>