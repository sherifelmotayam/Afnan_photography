<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="reserve.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<center>
	<form method="POST" action="test2.php" style="margin-top: 30px;">>
		<table style = "border-collapse: collapse; width:50%; border:1px solid black;">
			<tr> 
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> ID </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> Package Type ID </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> Description </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> Price </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> City </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black; width: 15%;'> Action </th>
         </tr>
	</form>
   <a href="AddPackage.php" class='btn btn-primary' style="margin-left: 450px;margin-bottom: 20px;">Add<a>
</body>
</html>
<?php
$get=new Packages();
$get->display();
?>
