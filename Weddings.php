<html>
<title> Weddings' gallery </title>

    <head>
        <link rel="stylesheet" type="text/css" href="navbar.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="shortcut icon" href="C:\Users\Seif\Desktop\LB_Editedb.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>

    <style>
    body {
        border: 100px solid #e7e7e7;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    /*
/*basic color*/
    :root {
        --primary-color: white;
        --secondary-color: black;
        --third-color: white;
        --fourth-color: white;
        --fifth-color: white;
        /*#DC143C*/
        --sixth-color: #EF4164;
        --seventh-color: #DC143C;
        --eigth-color: #DBD0D0;
        --ninth-color: #C73636;
        --tenth-color: white;

    }

    /*After Changing*/
    .dark-theme {
        --primary-color: black;
        --secondary-color: white;
        --third-color: #BB86FC;
        /*--third-color:#34D86A;*/
        /*--third-color:#2DB359;*/
        --fourth-color: #A4A1A1;
        --fifth-color: #D1D1D1;
        --sixth-color: black;
        --seventh-color: #858484;
        --tenth-color: #C73636;
    }

    #icon {
        cursor: pointer;
        width: 25px;
        height: 25px;
        margin-top: -3px;
        margin-left: 2px;
    }

    #icon2 {
        margin: -20px;
        width: 270px;
        height: 80px;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: poppins;
        background-color: var(--primary-color);
    }

    ul,
    nav {
        list-style: none;
    }

    a {
        text-decoration: none;
        cursor: pointer;
        color: inherit;
    }

    header {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 10;
        width: 100%;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 35px 100px 0;
    }

    header img {
        margin: -20px;
        width: 180px;
        height: 50px;
    }

    header h2 {
        text-transform: uppercase;
        color: var(--tenth-color);
    }

    header nav {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;

    }

    header nav i {
        color: var(--secondary-color);
    }

    header nav li {
        margin: 0 15px;
    }

    header nav li a {
        padding: 6px;
        font-size: 22px;
        color: var(--secondary-color);
    }

    header nav li a:hover {
        font-size: 26px;
        background: linear-gradient(45deg, #60A4E0, #00539C);
        border-radius: 10px;
        box-sizing: border-box;
        color: white;
        padding: 8px 8px;
    }

    header nav li a i {
        color: var(--secondary-color);
    }

    header nav li:first-child {
        margin-left: 0px;
    }

    header nav li:last-child {
        margin-right: 0px;
    }

    @media(max-width: 1000px) {
        header {
            padding: 20px 50px;
        }
    }

    @media(max-width: 700px) {
        header {
            flex-direction: column;
        }

        header h2 {
            margin-bottom: 15px;
        }

        header nav li {
            margin: 0 14px;
            margin-top: 30px;
        }

        #icon {
            margin-top: 30px;
            width: 20;
            height: 20;
        }

        #icon2 {
            width: 135;
            height: 40;
        }

        header nav li a {

            font-size: 16px;
        }
    }

    section {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 110px 100px;
    }

    @media(max-width: 1000px) {
        section {
            padding: 100px 50px;
        }
    }

    @media(max-width: 700px) {
        section {
            padding: 125px 35px;
        }
    }

    section p {
        max-width: 800px text-align:center;
        margin-bottom: 0 20px;
        line-height: 2;
    }


    .end {
        width: 100%;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        flex-direction: column;
        align-items: center;
        color: var(--primary-color);
        background: #000;
        padding: 20px;
    }

    #facebook,
    #instgram,
    #tiktok {
        padding-left: 5px;
    }

    .social-links a {
        width: 60px;
        font-size: 22px;
        text-decoration: none;
        justify-content: center;
        align-items: center;
        position: relative;
        color: var(--secondary-color);
    }

    .social-links a:hover {
        background: linear-gradient(45deg, #60A4E0, #00539C);
        border-radius: 100px;
        color: var(--fourth-color);
    }

    .social-links {
        margin-bottom: 50px;
        margin: 0 18px;
        box-sizing: 30px;
        margin: 0 10px;
        position: fixed;
        bottom: 400px;
        left: -150px;
        transform: rotate(-90deg);
        padding: 10px;
        text-align: center;
    }

    @media(max-width: 700) {
        .social-links {
            font-size: 12px;
            font-weight: 12px;
        }
    }

    footer p {
        color: var(--primary-color);
        text-align: center;
        margin-bottom: 20px;
    }

    footer {
        margin-top: 1000px;
        height: 40px;
        background: var(--secondary-color);
    }



    .tit {
        text-align: center;
        color: 00539C;
    }

    div.gallery {
        border: 2px solid #ccc;
    }

    div.gallery:hover {
        border: 2px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    .gallery {
        background-color: white;
        justify-content: left;
    }

    .responsive {
        align-items: left;
        justify-content: left;
        padding: 3 6px;
        float: left;
        width: 24.99999%;
    }

    div.desc {
        padding: 2px;
        background: #cac1c1;
        text-align: center;
        margin-top: 1px;
    }

    * {
        box-sizing: border-box;
    }

    @media only screen and (max-width: 700px) {
        .responsive {
            width: 49.99999%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px) {
        .responsive {
            width: 100%;
        }
    }
    </style>

<body>
    <h1 class="tit"> Weddings </h1>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="Wed1.php">
                <img src="imagesGallery/w6.jpg" width="400" height="300">
            </a>
            <div class="desc"> Album, press to open </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="wed2.php">
                <img src="imagesGallery/w5.jpg" width="400" height="300">
            </a>
            <div class="desc"> Album, press to open </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="wed3.php">
                <img src="imagesGallery/w3.jpg" width="400" height="300">
            </a>
            <div class="desc"> Album, press to open </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="Wed4.php">
                <img src="imagesGallery/w4.jpg" width="400" height="300">
            </a>
            <div class="desc"> Album, press to open </div>
        </div>
    </div>

    <header>
        <img src="imagesGallery/LL.png" alt="Afnan Logo" id="icon2">
        <nav>
            <li><a href='home.html'><i class="fas fa-home"></i>Home</a></li>
            <li><a href='About us.html'><i class="fas fa-info-circle"></i>About us</a></li>
            <li><a href='Albums.html'><i class="fas fa-images"></i>Albums</a></li>
            <li><a href='BookingTable.php'><i class="fas fa-table"></i>Book Now</a></li>

            <img src="imagesGallery/moon.png" alt="moon" id="icon">
        </nav>
    </header>


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