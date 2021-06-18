<?php

class UserValidation extends conn
{
    private $date;
    private $fn;
    private $ln;
    private $loc;
    private $package; 
    private $phone;
    private $comment;
    private $time;
    public $check=false;


    public function setData($fn,$ln,$phone,$loc,$package,$date,$time,$comment){
      $this->fn=$fn;
      $this->ln=$ln;
      $this->phone=$phone;
      $this->loc=$loc;
      $this->package=$package; 
      $this->date=$date;
      $this->time=$time;
      $this->comment=$comment;
    }
    public function getFirstName(){return $this->fn;}
    public function getLastName(){return $this->ln;}
    public function getPhone(){return $this->phone;}
    public function getLocation(){return $this->loc;}
    public function getDate(){return $this->date;}
    public function getTime(){return $this->time;}
    public function getComment(){return $this->comment;}  
    public function getPackage(){return $this->package;}  


  function check_validation()
  {

    if(!preg_match("/^[a-zA-Z'-]+$/",$this->getFirstName() ) and empty($this->getFirstName())  ){

     echo '<script type="text/JavaScript">swal("Sorry!", "invalid first name","error");</script>';
        die ();
   } 

    
    else if(!preg_match("/^[a-zA-Z'-]+$/",$this->getLastName()) and empty($this->getLastName()) ){
     echo '<script type="text/JavaScript"> 
     swal("Sorry!", "invalid last name", "error");
     </script>';
        die ();
   } 
     else if(!preg_match('/^[0-9]{11}+$/', $this->getPhone()) and empty($this->getPhone()) ){
              echo '<script type="text/JavaScript"> 
     swal("Sorry!", "invalid phone number", "error");
     </script>';
        die ();
     }
     else if(!preg_match("/^[a-zA-Z]$/", $this->getLocation()) and empty($this->getLocation()) ){
      echo '<script type="text/JavaScript">swal("Sorry!", "invalid location","error");</script>';
    }
    else{
        $sql="INSERT INTO `booking`(`FirstName`, `LastName`, `City` ,`Package`, `Date`,`time`,`Phone`, `Comment`) VALUES('$this->getFirstName()','$this->getLastName()', '$this->getLocation()' , '$this->getDate()','$this->getPackage','$this->getTime()','$this->getPhone()','$this->getComment')";

            $s=$this->connect()->prepare($sql);
            //To avoid The sql injection
            $s->execute([$this->getFirstName()]);
                   echo '<script type="text/JavaScript"> 
     swal("Good job!", "Reservation received", "success");
     </script>';


    }

  }
  
  function checkdate()
  {
    $n=new conn();
    $sql = "SELECT `Date` FROM booking WHERE `Date` = '".$this->getDate()."'";
    $stmt=$n->connect()->query($sql);
    
    if($stmt->rowCount())
    {
       echo '<script type="text/JavaScript"> 
     swal("Sorry!", "this date already received", "error");
     </script>';
      exit();

  
    }
}

public function displayCity()
{
    $sql = "SELECT DISTINCT CityName FROM `city`";
    $stmt=$this->connect()->query($sql);
    while($row=$stmt->fetch())
    {
      echo '<option value="'.$row['CityName'].'">'.$row['CityName'].'</option>' ;
      echo $row['CityName'];
    }   
}

public function displayPackage()
{
    $sql = "SELECT DISTINCT Package_Name FROM `package type`";
    $stmt=$this->connect()->query($sql);
    while($row=$stmt->fetch())
    {
      echo '<option value="'.$row['Package_Name'].'">'.$row['Package_Name'].'</option>' ;
      echo $row['Package_Name'];
    }   
}



public function sendbody(){
$body=<<<EOD
you have a new resevaition and it's details
name is: $fn $ln
date is: $date at time: $time
location is: $loc
phone is: $phone
package type is: $package
Description & comments: $Comment
EOD;
return $body;

}


}

?>
