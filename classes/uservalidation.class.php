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
    if( empty($this->getLastName()) or empty($this->getFirstName()) or empty($this->getPhone()) or empty($this->getLocation()) or empty($this->getDate()) or empty($this->getTime()) or empty($this->getComment()) or empty($this->getPackage())){
      echo '<script type="text/JavaScript">swal("Please fill in all the data!", {buttons: false,timer: 3000});;</script>';
      die ();

    }

    else if(!preg_match("/^[a-zA-Z'-]+$/",$this->getFirstName() ) or empty($this->getFirstName())  ){

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
        $sql="INSERT INTO `booking`(`FirstName`, `LastName`, `City` ,`Package`, `Date`,`time`,`Phone`, `Comment`) VALUES('$this->fn','$this->ln', '$this->loc' , '$this->package','$this->date','$this->time','$this->phone','$this->Comment')";

            $s=$this->connect()->prepare($sql);
            //To avoid The sql injection
            $s->execute([$this->getFirstName()]);
                   echo '<script type="text/JavaScript"> 
     swal("Good job!", "Reservation received", "success",buttons: false, timer: 3000);
     
     </script>';


    }

  }
  
  function checkdate()
  {
    $n=new conn();
    $sql = "SELECT `Date` FROM booking WHERE `Date` = '".$this->getDate()."'";
    $stmt=$n->connect()->query($sql);
    if(!empty($this->getDate())){
    if($stmt->rowCount())
    {
       echo '<script type="text/JavaScript"> 
     swal("Sorry!", "this date already received", "error");
     </script>';
      exit();
      

  
    }
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




public function edit()
    {
        /*if there is no word id= will show this message or redirect 
        to another page*/
        if(!isset($_GET['id']))
        {
            die('ID isn"t valid');
        }
        else
        {
            $id= $_GET['id'];
            $sql="SELECT * FROM `booking` WHERE `ID`=$id";
            $result=$this->connect()->query($sql);
            //this mean that the id can't be dublicated
            if($result->rowCount() == 0)
            {
                die('ID isnot found in the database');
            }
            while($data=$result->fetch())
            {
                $this->ID= $data['ID'];
                $this->fn= $data['FirstName'];
                $this->ln =$data['LastName'];
                $this->city= $data['City'];
                $this->date= $data['Date'];
                $this->time =$data['Time'];
                $this->comment =$data['Comment'];
                $this->package =$data['Package'];
                $this->phone =$data['Phone'];
            }
        }           
    }
    public function getID()
    {
        return $this->ID;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function display()
    {
        $sql="SELECT * FROM `booking`";
        $stmt=$this->connect()->query($sql);
        while($row=$stmt->fetch())
        {
          print "<tr>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['ID']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['FirstName']." ".$row['LastName']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Date']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Time']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['City']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Package']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Phone']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Comment']."</td>";
          print "<td>";
          print "<div class='btn-group'>";
          print "<a class='btn btn-warning' href='EditBook.php?id=".$row['ID']."'>Edit</a>";
          print "<a class='btn btn-danger' onclick=\"javascript:return confirm('Are you sure you want to delete this?');\"href='DeleteBook.php?id=".$row['ID']."'>Delete</a> ";
          print "<div>";
          print "</td>";
          print "</tr>";
        }
    }
    public function editData()
        {
            if(isset($_POST['submit']))
            {
                $id=$_POST['ID'];
                $fn=$_POST['FirstName'];
                $ln=$_POST['LastName'];
                $city=$_POST['City'];
                $date=$_POST['Date'];
                $time=$_POST['Time'];
                $comment=$_POST['Comment'];
                $phone=$_POST['Phone'];
                $package=$_POST['Package'];
                $sql="UPDATE `booking`  SET `FirstName` ='$fn' ,`LastName` = '$ln',`Date` = '$date',`Time` = '$time',`City` = '$city',`Package`='$package' , `Phone`= '$phone' , `Comment`='$comment' WHERE `ID`=$id";
                $stmt=$this->connect()->prepare($sql);
                if($stmt->execute())
                {
                    echo 'Updated Successfully';
                    header('Location:ShowBook.php');
                }
                else
                {
                    echo 'Updated Failed';
                }
                
            }
        }
    public function delete()
    {
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $sql="DELETE FROM `booking` WHERE `ID`=$id";
            if($this->connect()->query($sql) == TRUE)
            {
                print "<script><alert>return confirm('Are you sure you want to delete this Reservartion') style='position: absolute;''><input type= 'submit' name='delete' id='delete' value='Delete Records'</alert></script>";
            }
            else
            {
                echo "There is a problem";
            }
            header("Location:ShowBook.php");
        }
        else
        {
            die('Id not found');
        }
    }
}




?>
