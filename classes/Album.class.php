<?php

class album extends conn
{
public $id;
public $albumname;
public $image;

function __construct1()
{
  $this->albumname=$albumname;
  $this->image=$image;
}
  function __construct2($albumname,$image)
  {
    $this->albumname=$albumname;
    $this->image=$image;
  }

  public function AddAlbum()
  {
    $sql="INSERT INTO `album`(`AlbumName`, `Image`) VALUES (?,?)";
    $stmt=$this->connect()->prepare($sql);
    $stmt->execute([$this->albumname,$this->image]);
  }
  public function viewalbum()
  {
    $array=array();
    $sql="SELECT * FROM `album`";
    $stmt=$this->connect()->query($sql);
    while($row=$stmt->fetch())
     {
       $array[]=$row;
     }
 return $array;
  }



}






 ?>
