<?php
declare(strict_types=1);
 include 'class-autoloaded.php';
 include 'Main_Nav.php';
 ?>
<html>
<title> Afnan's Albums </title>

<head>
    <link href="ALBUMS.css" type="text/css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="shortcut icon" href="C:\Users\Seif\Desktop\LB_Editedb.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <h1 class="tit"> Albums </h1>
     <?php
      $album=new album("data","data");
      $getdata=  $album->viewalbum();
        foreach ($getdata as $data)
         {
          ?>
          <div class="responsive">
              <div class="gallery">
                  <a  href="Gallery.php?id=<?php echo $data['ID'];?>">
                      <img src="<?php echo ("imagesGallery/".$data['Image']) ?>" width="400" height="300" >
                  </a>
                  <div class="desc"><?php echo ($data['AlbumName']) ?> </div>
              </div>
          </div>

          <?php
        }
          ?>



    <div class="social-links">
        <a href="https://www.facebook.com/afnang.gharib.photography/?ti=as" target="_blank" id="facebook"><i
                class="fab fa-facebook"></i>Facebook</a>
        <a href="https://instagram.com/afnan.gharib.photography?igshid=agmkz7yj2w78" target="_blank" id="instgram"><i
                class="fab fa-instagram"></i>Instgram </a>
        <a href="https://vm.tiktok.com/ZMeuNFDKS/" id="tiktok" target="_blank"><i class="fab fa-tiktok"></i>Tiktok</a>
    </div>

    <footer>
        <p>All Rigth Reserved by your website</p>
    </footer>
    <script>
    var icon = document.getElementById("icon");
    icon.onclick = function() {
        document.body.classList.toggle("dark-theme");
        if (document.body.classList.contains("dark-theme")) {
            icon.src = "imagesGallery/sun.png";
        } else {
            icon.src = "imagesGallery/moon.png";
        }
    }
    </script>

</body>
</html>
