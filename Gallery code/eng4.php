<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Engagement 4</title>
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
        <img onmouseover="preview.src=img1.src" name="img1" src="1e4.jpg" alt="" />
        <img onmouseover="preview.src=img2.src" name="img2" src="2e4.jpg" alt="" />
        <img onmouseover="preview.src=img3.src" name="img3" src="3e4.jpg" alt="" />
        <img onmouseover="preview.src=img4.src" name="img4" src="4e4.jpg" alt="" />
        <img onmouseover="preview.src=img5.src" name="img5" src="5e4.jpg" alt="" />
        <img onmouseover="preview.src=img6.src" name="img6" src="6e4.jpg" alt="" />
        <img onmouseover="preview.src=img7.src" name="img7" src="7e4.jpg" alt="" />
        <img onmouseover="preview.src=img8.src" name="img8" src="8e4.jpg" alt="" />
        <img onmouseover="preview.src=img9.src" name="img9" src="9e4.jpg" alt="" />
        <img onmouseover="preview.src=img10.src" name="img10" src="10e4.jpg" alt="" />
        <img onmouseover="preview.src=img11.src" name="img11" src="11e4.jpg" alt="" />
        <img onmouseover="preview.src=img12.src" name="img12" src="12e4.jpg" alt="" />
        <img onmouseover="preview.src=img13.src" name="img13" src="13e4.jpg" alt="" />
    </div>
</body>

</html>