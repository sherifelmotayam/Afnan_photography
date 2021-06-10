<?php

class Admin extends conn
{
  private $id;
  private $firstname;
  private $lastname;
  private $username;
  private $email;
  private $password;
  private $image;
  private $phonenumber;

  public function __construct1($id)
  {
   $this->id=$id;
  }
  public function __construct2($firstname,$lastname,$username,$email,$password,$image,$phonenumber)
  {
   $this->firstname=$firstname;
   $this->lastname=$lastname;
   $this->username=$username;
   $this->email=$email;
   $this->password=$password;
   $this->image=$image;
   $this->phonenumber=$phonenumber;
  }

  public function AddAdmin()
  {
    $sql="INSERT INTO `admin`(`Username`, `First_Name`, `Last_Name`, `Email`, `Password`, `Image`,`phonenumber`) VALUES(?,?,?,?,?,?,?)";
    $stmt=$this->connect()->prepare($sql);
    $stmt->execute([$this->username,$this->firstname,$this->lastname,$this->email,$this->password,$this->image]);
  }
  public function Editprofile($id,$firstname,$lastname,$email,$password,$image,$phonenumber)
  {
    $sql="UPDATE `Admin` SET `First_Name` = ?, `Last_Name` = ?, `Email` = ?,`Password`=?, WHERE `ID` = '".$id."'";
    $stmt=$this->connect()->prepare($sql);
    $stmt->execute([$firstname,$lastname,$email,$password,$image]);
  }

  public function viewprofile($id)
  {
    $sql="SELECT * FROM admin WHERE id= '".$id."'";
    $stmt=$this->connect()->query($sql);
    while($row=$stmt->fetch())
     {
       $this->firstname=$row['First_Name'];
       $this->lastname=$row['Last_Name'];
       $this->username=$row['Username'];
       $this->email=$row['Email'];
       $this->password=$row['Password'];
       $this->image=$row['Image'];
       $this->phonenumber=$row['phonenumber'];
     }
  }
  public function getfirstname()
  {
  	return $this->firstname;
  }
  public function getlastname()
  {
  	return $this->lastname;
  }
  public function getusername()
  {
  	return $this->username;
  }
  public function getemail()
  {
  	return $this->email;
  }
  public function getpassword()
  {
  	return $this->password;
  }
  public function getimage()
  {
  	return $this->image;
  }
  public function getphonenumber()
  {
  	return $this->phonenumber;
  }



}

 ?>
