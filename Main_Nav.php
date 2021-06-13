<html>
<head>
	<link rel="stylesheet" type="text/css" href="Main_Nav Style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="shortcut icon"  href="Images/LB_Editedb.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<header>
	<img src="Images/LB.png" alt="Afnan Logo" id="icon2">
	<nav>	
		<li><a href='The_Main.php'><i class="fas fa-home"></i>Home</a></li>
		<li><a href='About Us.php'><i class="fas fa-info-circle"></i>About us</a></li>
		<li><a href='ALBUM.php'><i class="fas fa-images"></i>Albums</a></li>
		<li><a href='Pack.php'><i class="fas fa-table"></i>Book Now</a></li>
		<li><a href='Login.php'><i class="fas fa-sign-in-alt"></i></a></li>
		<!--<div id="select">
			<img src="Images/moon.png" alt="moon" id="icon">
		</div>-->
	</nav>
</header>
	
	
	<div class="social-links">
		<a href="https://www.facebook.com/afnang.gharib.photography/?ti=as" target="_blank" id="facebook"><i class="fab fa-facebook"></i>Facebook</a>
		<a href="https://instagram.com/afnan.gharib.photography?igshid=agmkz7yj2w78" target="_blank" id="instgram"><i class="fab fa-instagram"></i>Instgram  </a>
		<a href="https://vm.tiktok.com/ZMeuNFDKS/" id="tiktok" target="_blank"><i class="fab fa-tiktok"></i>Tiktok</a>	
	</div>
	<!--<script>
	<script>
	var icon=document.getElementById("icon");
	icon.onclick = function(){
		document.body.classList.toggle("dark-theme");
		if(document.body.classList.contains("dark-theme")){
			icon.src="Images/sun.png";	
		}
		else{
			icon.src="Images/moon.png";	
		}
	}
	/*if(localStorage.getElementById('select')) {
         body.classList.add('select');
    }*/
            function applyTheme(dark) {
            document.body.classList.remove("dark-theme");
            document.body.classList.add(`dark-${dark}`);
        }

        document.addEventListener("DOMContentLoaded", () => {
        document.querySelector("#select").addEventListener("change", function() {
        localStorage.setItem("dark", this.value);
        applyTheme(this.value);
        });
    });
    document.addEventListener("DOMContentLoaded", () => {
        const savedTheme = localStorage.getItem("dark");
        applyTheme(savedTheme);

        for (const optionElement of document.querySelectorAll("#select")) {
        optionElement.selected = savedTheme === optionElement.value;
         }

        document.querySelector("#dark").addEventListener("change",function () {
            localStorage.setItem("dark", this.value);
            applyTheme(this.value);
        });
    });
</script>-->
</body>
</html>