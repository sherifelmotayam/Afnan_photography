<?php

class images extends conn
{
public $Image_Name;
public $Image_Description;
public $Image_Type;


public function __construct($Image_Name,$Image_Description,$Image_Type)
{
$this->Image_Name=$Image_Name;
$this->Image_Description=$Image_Description;
$this->Image_Type=$Image_Type;
}

public function addimage()
{
  
  $sql="INSERT INTO `images`( `Image_Name`, `Image_Description`, `Image_Type`) VALUES (?,?,?)";
  $stmt=$this->connect()->prepare($sql);
  $stmt->execute([$this->Image_Name,$this->Image_Description,$this->Image_Type]);
}

public function readimages($galleryid)
{
  $array=array();
  $sql="SELECT `ID`, `Image_Name`, `Image_Description`FROM `images` WHERE `Image_Type`=$galleryid";
  $stmt=$this->connect()->query($sql);
  while($row=$stmt->fetch())
   {
     $array[]=$row;
   }
  return $array;

}
}

 ?>
