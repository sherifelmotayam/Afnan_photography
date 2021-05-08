<?php

        

$Test['id']=2;
$conn = mysqli_connect("localhost","root","","Afnan");
    $sql = "SELECT * FROM Admin WHERE ID =2";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_row($result)){
       
      $FirstName=$row[1];
      $LastName=$row[2];
      $Email=$row[3];
      $Password=$row[4];
      $PhoneNumber=$row[5];
      $Profilepicture=$row[6];
      }    
    ?>

<html>
 <head>
  <title>Profile</title>
  <link rel = "stylesheet" href = "Profile.css">          
 </head>
  <?php include "Admin.php"; ?>
  <body>
      <div class="profile" style = 'height: 620px;margin-right:250px; margin-top: 20px;'>
  	
          <form action="View Profile.php" method="post" enctype="multipart/form-data">

    <?php print "<img src = 'Adminsphotos/$Profilepicture' style = ' width: 200px; height: 200px; margin-right: 485px; padding-top: 0px;  margin-buttom:200px;'>"?>;
		<input type = "file" name = "upload"   >
     
       
       
           <label>
               <p>First Name</p><input type="text" name = "Firstname" placeholder = "First Name" value = '<?php print "$FirstName"; ?> '>
           
               <p>Last Name</p><input type="text" name = "Lastname" placeholder = "Last Name" value = '<?php print "$LastName"; ?> '>
           </label>
           
           
              <p>Email</p> <input type="text" name = "Email" placeholder = "Email" value = '<?php print "$Email"; ?> '> 
           
              <p>Phone Number</p><input type="text" name = "Phonenumber" placeholder = "Phone Number" value = '<?php print "$PhoneNumber"; ?> '>
           
              <p>Password</p><input type="Password" name = "Firstname" placeholder = "Password" value = '<?php print "$Password"; ?> '>
   
           <input type = "submit" value = "Edit" name = "Edit">

       </form>
        <center>
			<?php
				
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
                else if(isset($_SESSION['errmsg'])){
                    echo $_SESSION['errmsg'];
					unset($_SESSION['errmsg']);
                }
			?>
			</center>
	</div>
  </body>
</html>