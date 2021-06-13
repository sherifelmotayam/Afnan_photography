<?php

class UserValidation extends conn
{
    public $date;
    public $fn;
    public $ln;
    public $loc;
    public $phone;
    public $Comment;
    public $time;
    public $check=false;

  function check_validation($fn,$ln,$phone,$loc,$date,$time,$Comment)
  {
    $this->fn=$fn;
    $this->ln=$ln;
    $this->phone=$phone;
    $this->loc=$loc;
    $this->date=$date;
    $this->time=$time;
    $this->comment=$Comment;
    if(!preg_match("/^[a-zA-Z'-]+$/",$fn)){

     echo '<script type="text/JavaScript">swal("Sorry!", "invalid first name","error");</script>';
        die ();
   } 

    
    if(!preg_match("/^[a-zA-Z'-]+$/",$ln)){
     echo '<script type="text/JavaScript"> 
     swal("Sorry!", "invalid last name", "error");
     </script>';
        die ();
   } 
     else if(!preg_match('/^[0-9]{11}+$/', $phone)){
              echo '<script type="text/JavaScript"> 
     swal("Sorry!", "invalid phone number", "error");
     </script>';
        die ();
     }
     else if(preg_match("/^[a-zA-Z]$/", $loc) != 0){
         print ($loc." is not characters!");
     }
    else{
        $sql="INSERT INTO `booking`(`FirstName`, `LastName`, `City` , `Date`,`time`,`Phone`, `Comment`) VALUES('$fn','$ln', 'Ismailia' , '$date','$time','$phone','$Comment')";

            $s=$this->connect()->prepare($sql);
            //To avoid The sql injection
            $s->execute([$fn]);
                   echo '<script type="text/JavaScript"> 
     swal("Good job!", "Reservation received", "success");
     </script>';

    }

  }
  function getdate($d)
  {
    $n=new conn();
    $sql = "SELECT `Date` FROM booking WHERE `Date` = '".$d."'";
    $stmt=$n->connect()->query($sql);
    
    if($stmt->rowCount())
    {
       echo '<script type="text/JavaScript"> 
     swal("Sorry!", "this date already received", "error");
     </script>';
      exit();

  
    }
  
 



}

}

?>
