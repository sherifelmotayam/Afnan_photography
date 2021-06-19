<?php

class album extends conn
{
public $id;
public $albumname;
public $image;




public function __construct($albumname,$image)
{
  $this->albumname=$albumname;
  $this->image=$image;
}
public function album()
{
  $this->albumname="";
  $this->image="";
}

  public function AddAlbum()
  {
    $sql="INSERT INTO `album`(`AlbumName`, `Image`) VALUES (?,?)";
    $stmt=$this->connect()->prepare($sql);
    if($stmt->execute([$this->albumname,$this->image]))
    {
      print "<script>alert ('data inserted ') </script>";

    }
    else
    {
      print "<script>alert ('data not inserted ') </script>";

    }
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
