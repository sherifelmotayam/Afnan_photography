<?php

class Admin extends conn
{
  private $firstname;
  private $lastname;
  private $username;
  private $email;
  private $pasword;
  private $image;

  public function __construct($firstname,$lastname,$username,$email,$pasword,$image)
  {
   $this->firstname=$firstname;
   $this->lastname=$lastname;
   $this->username=$username;
   $this->email=$email;
   $this->password=$pasword;
   $this->image=$image;
  }
  public function AddAdmin()
  {
    $sql="INSERT INTO `admin`(`Username`, `First_Name`, `Last_Name`, `Email`, `Password`, `Image`) VALUES(?,?,?,?,?,?)";
    $stmt=$this->connect()->prepare($sql);
    $stmt->execute([$this->username,$this->firstname,$this->lastname,$this->email,$this->password,$this->image]);

  }

}



 ?>
