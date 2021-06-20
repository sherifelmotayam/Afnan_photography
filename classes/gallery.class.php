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
public function display()
  {
    $sql="SELECT * FROM `gallery`";
    $stmt=$this->connect()->query($sql);
    while($row=$stmt->fetch())
        {
          print "<tr>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['ID']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['ImageGallery']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['NameGallery']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['IDAlbum']."</td>";
          print "<div class='btn-group'><td>";
          print "<a class='btn btn-warning' href='EditGalleries.php?id=".$row['ID']."'>Edit</a>";
          print "<a class='btn btn-danger' onclick=\"javascript:return confirm('Are you sure you want to delete this?');\"href='DeleteGalleries.php?id=".$row['ID']."'>Delete</a><td> ";
          print "<div>";
          print "</td>";
          print "</tr>";
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
      $sql="SELECT * FROM `gallery` WHERE `ID`=$id";
      $result=$this->connect()->query($sql);
      //this mean that the id can't be dublicated
      if($result->rowCount() == 0)
      {
        die('ID isnot found in the database');
      }
      while($data=$result->fetch())
      {
        $this->ID= $data['ID'];
        $this->IDAlbum= $data['IDAlbum'];
        $this->NameGallery= $data['NameGallery'];
        $this->ImageGallery =$data['ImageGallery'];
      }
    } 
    
  }
  public function editData()
  {
    if(isset($_POST['submit']))
    {
      $id=$_POST['ID'];
      $ImageGallery=$_POST['Image_Gallery'];
      $NameGallery=$_POST['Name_Gallery'];
      $IDAlbum=$_POST['Album_ID'];
      $sql="UPDATE `gallery`  SET `ImageGallery` = '$ImageGallery' ,`NameGallery` = '$NameGallery', `IDAlbum` = '$IDAlbum' WHERE `ID`=$id";
      $stmt=$this->connect()->prepare($sql);
      if($stmt->execute())
      {
        echo 'Updated Successfully';
        header('Location:ShowGallery.php');
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
      $sql="DELETE FROM `gallery` WHERE `ID`=$id";
      if($this->connect()->query($sql) == TRUE)
      {
        print "<script><alert>return confirm('Are you sure you want to delete this Reservartion') style='position: absolute;''><input type= 'submit' name='delete' id='delete' value='Delete Records'</alert></script>";
      }
      else
      {
        echo "There is a problem";
      }
      header("Location:ShowGallery.php");
    }
    else
    {
      die('Id not found');
    }
  }
  public function getImageGallery()
  {
    return $this->ImageGallery;
  }
  public function getNameGallery()
  {
    return $this->NameGallery;
  }
  public function getIDAlbum()
  {
    return $this->IDAlbum;
  }
}
?>