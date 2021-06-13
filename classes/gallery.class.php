<?php
class gallery extends conn
{
public $id;
public $ImageGallery;
public $NameGallery;
public $IDAlbum;

public function __construct1($id,$ImageGallery,$NameGallery,$IDAlbum)
{
 $this->id=$id;
 $this->ImageGallery=$ImageGallery;
 $this->NameGallery=$NameGallery;
 $this->IDAlbum=$IDAlbum;
}

public function addgallery()
{
  $sql="INSERT INTO `gallery`( `ImageGallery`, `NameGallery`, `IDAlbum`) VALUES (?,?,?,?)";
  $stmt=$this->connect()->prepare($sql);
  $stmt->execute([$this->ImageGallery,$this->NameGallery,$this->IDAlbum]);
}

public function viewgallery($id)
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
