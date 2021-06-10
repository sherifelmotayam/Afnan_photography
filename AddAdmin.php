<?php
    declare(strict_types=1 );
    include 'Admin.php';
    include 'includes/class-autoloaded.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <link rel="stylesheet" type="text/css" href="AddAdmin.css">
 </head>
   <body>
    <h1>Add Admin</h1>
    <div class="form" >
      <form action="AddAdmin.php" method="post" enctype="multipart/form-data" id="Get data" >
       <label>
           <input type=file name="image" id="image" class="inputfile" >
           <label for="image">Upload profile picture</label>
        </label>
       <br>
       <label>
           <input type = "text" name = "FirstName" placeholder="Firt Name">
           <input type = "text" name = "LastName" placeholder="Last Name">
       </label>
        <br>
        <br>
       <label>
           <input type = "number" name = "PhoneNumber" placeholder="Phone number ">
           <input type = "email" name = "Email" placeholder="Email">
       </label>
        <br>
        <br>
       <label>
           <input type = "password" name = "Password" placeholder="Password">  <br>
           <input type = "password" name = "Re-password" placeholder="Re-password">  <br>
       </label>
        <br>
        <br>
       <input type = "submit" name = "AddAdmin" value = "AddAdmin" style="width:120px ">
     </form>
   </div>
 </body>
</html>
<?php
if (isset($_POST['AddAdmin']))
 {

    $filename=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    $firstname=$_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $phonenumber=$_POST['PhoneNumber'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $repassword=$_POST['Re-password'];
    $user = strtok($email, '@');
     if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z])$^", $firstname) == 0)
        {
        $_SESSION['sign_msg'] = "Name should be characters only!";
   	     }
     if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z])$^", $lastname) == 0)
        {
      $_SESSION['sign_msg'] = "Name should be characters only!";
         }

     $filtered_phone_number = filter_var($phonenumber, FILTER_SANITIZE_NUMBER_INT);
      // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
      // Check the lenght of number
      // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 11 || strlen($phone_to_check) > 11)
         {
        $_SESSION['sign_msg'] = "phone number must be 11 number only!";
         }

     $e = filter_var($email,FILTER_SANITIZE_EMAIL);
     if(!filter_var($e,FILTER_VALIDATE_EMAIL))
        {
          $_SESSION['sign_msg'] = "Not a valid email address!";
        }


     if($password !=$repassword)
        {
          $_SESSION['sign_msg'] = "Password doesnt match!";
        }

      else
        {
           $password  = md5($_POST['Password']);
           $uppercase = preg_match('@[A-Z]@', $password);
           $lowercase = preg_match('@[a-z]@', $password);
           $number    = preg_match('@[0-9]@', $password);
           if (!$uppercase || !$lowercase || !$number || strlen($_POST['password']) < 5)
              {
               $_SESSION['sign_msg'] = "Password must Contain at least 5 Characters!";
              }
        }

     if(isset($_SESSION['sign_msg']))
        {
           echo $_SESSION['sign_msg'];
           unset($_SESSION['sign_msg']);
        }
      else
        {
          $Admin=new Admin($firstname,$lastname,$user,$email,$password,$filename,$phonenumber);
          $Admin->AddAdmin();
          move_uploaded_file($tmp,"Admin/".$filename);



        }
  }





?>
