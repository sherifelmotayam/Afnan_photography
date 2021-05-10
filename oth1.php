<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Pregnancy </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    /* background: #000;  */
    height: 100vh
}

.container {
    width: 1500px;
    display: flex;
    justify-content: space-between;
}

.container img {
    max-width: 300px;
    transform-origin: center;
    transform: perspective(800px) rotateY(30deg);
    transition: .10s;
    -webkit-box-reflect: below 2px linear-gradient(transparent, transparent, #0006)
}

.container:hover img {
    opacity: .1
}

.container img:hover {
    transform: perspective(800px) rotateY(0deg);
    opacity: 1
}
</style>

<body>
    <div class="container">
        <img onmouseover="preview.src=img1.src" name="img1" src="imagesGallery/1o1.jpg" alt="" />
        <img onmouseover="preview.src=img2.src" name="img2" src="imagesGallery/2o1.jpg" alt="" />
        <img onmouseover="preview.src=img3.src" name="img3" src="imagesGallery/3o1.jpg" alt="" />
        <img onmouseover="preview.src=img4.src" name="img4" src="imagesGallery/4o1.jpg" alt="" />
        <img onmouseover="preview.src=img5.src" name="img5" src="imagesGallery/5o1.jpg" alt="" />
        <img onmouseover="preview.src=img6.src" name="img6" src="imagesGallery/6o1.jpg" alt="" />
        <img onmouseover="preview.src=img7.src" name="img7" src="imagesGallery/7o1.jpg" alt="" />
        <img onmouseover="preview.src=img8.src" name="img8" src="imagesGallery/8o1.jpg" alt="" />
        <img onmouseover="preview.src=img9.src" name="img9" src="imagesGallery/9o1.jpg" alt="" />
        <img onmouseover="preview.src=img10.src" name="img10" src="imagesGallery/10o1.jpg" alt="" />
        <img onmouseover="preview.src=img11.src" name="img11" src="imagesGallery/11o1.jpg" alt="" />
        <img onmouseover="preview.src=img12.src" name="img12" src="imagesGallery/12o1.jpg" alt="" />
        <img onmouseover="preview.src=img13.src" name="img13" src="imagesGallery/13o1.jpg" alt="" />

    </div>
</body>

>>>>>>> 00c41de003ba79ecb20f24874e9f2dce4a2b84e8
</html>