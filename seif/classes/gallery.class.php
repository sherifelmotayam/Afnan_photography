<?php
class gallery extends conn
{
public $id;
public $ImageGallery;
public $NameGallery;
public $IDAlbum;

public function __construct($ImageGallery,$NameGallery,$IDAlbum)
{
 $this->ImageGallery=$ImageGallery;
 $this->NameGallery=$NameGallery;
 $this->IDAlbum=$IDAlbum;
 ;
}

public function addgallery()
{
  $ttt=$this->IDAlbum;
  $sql="INSERT INTO `gallery`( `ImageGallery`, `NameGallery`, `IDAlbum`) VALUES (?,?,?)";
  $stmt=$this->connect()->prepare($sql);
  
  if($stmt->execute([$this->ImageGallery,$this->NameGallery,$this->IDAlbum]))
  {
    print "<script>alert ('data inserted ') </script>";

  }
  else
  {
    print "<script>alert ('data not inserted ') </script>";

  }
}
public function viewgalleryname()
{
  $array=array();
  $sql="SELECT `ID`, `NameGallery` FROM `gallery` ";
  $stmt=$this->connect()->query($sql);
  while($row=$stmt->fetch())
   {
     $array[]=$row;
   }
  return $array;
}public function viewgallery($id)
{
  $array=array();
  $sql="SELECT `ID`, `ImageGallery`, `NameGallery`, `IDAlbum` FROM `gallery` WHERE `IDAlbum`=$id";
  $stmt=$this->connect()->query($sql);
  while($row=$stmt->fetch())
   {
     $array[]=$row;
   }
  return $array;
}
}
?>