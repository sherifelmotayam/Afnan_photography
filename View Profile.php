<?php
  declare(strict_types=1 );
  session_start();
  include 'includes/class-autoloaded.php';
  include "Admin.php";
  $Admin=new Admin();
  $Admin->viewprofile($_SESSION['user_session']);
  $image=$Admin->getimage();
  $fname=$Admin->getfirstname();
  $lname=$Admin->getlastname();
  $img=$Admin->getimage();
  $eml=$Admin->getemail();
  $phnnumber=$Admin->getphonenumber();
  $pass=$Admin->getpassword();
    ?>

<html>
  <head>
    <title>Profile</title>
    <link rel = "stylesheet" href = "View Profile.css">
  </head>
  <body>
  <?php


  ?>
    <h1 style = 'color:red'>View Profle123</h1>
    <div class="profile" style = 'height: 620px;margin-right:250px; margin-top: 20px;'>
  	  <form action="View Profile.php" method="post" enctype="multipart/form-data">
        <?php print "<img src = 'Admin/$img' style = ' width: 200px; height: 200px; margin-right: 485px; padding-top: 0px;  margin-buttom:200px;'>"?>;
		    <input type = "file" name = "image">

        <label>
          <p>First Name</p><input type="text" name = "Fname" placeholder = "First Name" value = '<?php print "$fname"; ?> '>
          <p>Last Name</p><input type="text" name = "Lname" placeholder = "Last Name" value = '<?php print "$lname"; ?> '>
        </label>

        <p>Email</p> <input type="text" name = "Eml" placeholder = "Email" value = '<?php print "$eml"; ?> '>
        <p>Phone Number</p><input type="text" name = "Pumber" placeholder = "Phone Number" value = '<?php print "$phnnumber"; ?> '>
        <p>Password</p><input type="Password" name = "Pass" placeholder = "Password" value = '<?php print "$pass"; ?> '>

        <input type = "submit" value = "Edit" name = "Edit">

  	  </form>
      <center>
			  <?php
          if(isset($_POST['Edit']))
              {
                $filename=$_FILES['image']['name'];
                $tmp=$_FILES['image']['tmp_name'];
                $firstname=$_POST['Fname'];
                $lastname=$_POST['Lname'];
                $email=$_POST['Eml'];
                $password=$_POST['Pass'];
                $phonenumber=$_POST['Pumber'];
                if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z])$^", $firstname) == 0)
                    {
                       $_SESSION['errmsg'] = "First Name should be characters only!";
                    }
                if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z])$^", $lastname) == 0)
                    {
                       $_SESSION['errmsg'] = "Last Name should be characters only!";
                     }

                $e = filter_var($_POST['Eml'],FILTER_SANITIZE_EMAIL);
                if(!filter_var($e,FILTER_VALIDATE_EMAIL))
                     {
                        $_SESSION['errmsg'] = "Not a valid email address!";
                     }

                if(!isset($_SESSION['errmsg']))
                     {
                      $Admin->Editprofile($id,$firstname,$lastname,$email,$password,$filename,$phonenumber);


                     }
                if(!isset($_SESSION['errmsg']))
                     {
					              echo $_SESSION['msg'];
				               	unset($_SESSION['msg']);
			                  header('location: View Profile.php');
                     }
                else if(isset($_SESSION['errmsg']))
                     {
                       echo $_SESSION['errmsg'];
					             unset($_SESSION['errmsg']);
                     }
              }
			  ?>
      </center>
    </div>
  </body>
</html>