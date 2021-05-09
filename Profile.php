<? php
     session_start();
    include 'conn.php';
     
      $FirstName=$_POST['Firstname'];
      $LastName=$_POST['Lastname'];
      $Email=$_POST['Email'];
      $Password=$_POST['Password'];
      $PhoneNumber=$_POST['Phonenumber'];
      $Profilepicture=$_POST['uname'];
      
      
      if(isset($_POST['Edit']))
      {
print "<script>alert ('empty Admin Id') </script>";
          
           if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$^", $FirstName) == 0){
        $_SESSION['errmsg'] = "First Name should be characters only!"; 
        header('location: View Profile.php'); 
	   
      }
      if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$^", $LastName) == 0){
        $_SESSION['errmsg'] = "Last Name should be characters only!"; 
        header('location: View Profile.php'); 
	   
      }
      $e = filter_var($_POST['Email'],FILTER_SANITIZE_EMAIL);
        if(!filter_var($e,FILTER_VALIDATE_EMAIL))
        {
           $_SESSION['errmsg'] = "Not a valid email address!"; 
           header('location: View Profile.php');  
        }
        
      
      
      }
