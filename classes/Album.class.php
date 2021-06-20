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
  public function display()
  {
    $sql="SELECT * FROM `album`";
    $stmt=$this->connect()->query($sql);
    while($row=$stmt->fetch())
        {
          print "<tr>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['ID']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['AlbumName']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Image']."</td>";
          print "<div class='btn-group'><td>";
          print "<a class='btn btn-warning' href='EditAlbums.php?id=".$row['ID']."'>Edit</a>";
          print "<a class='btn btn-danger' onclick=\"javascript:return confirm('are you sure you want to delete this?');\"href='DeleteAlbums.php?id=".$row['ID']."'>Delete</a><td> ";
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
      $sql="SELECT * FROM `album` WHERE `ID`=$id";
      $result=$this->connect()->query($sql);
      //this mean that the id can't be dublicated
      if($result->rowCount() == 0)
      {
        die('ID isnot found in the database');
      }
      while($data=$result->fetch())
      {
        $this->ID= $data['ID'];
        $this->albumname= $data['AlbumName'];
        $this->image=$data['Image'];
      }
    } 
    
  }
  public function editData()
  {
    if(isset($_POST['submit']))
    {
      $id=$_POST['ID'];
      $albumname=$_POST['AlbumName'];
      $image=$_POST['Image'];
      $sql="UPDATE `album`  SET `AlbumName` = '$albumname' ,`Image` = '$image' WHERE `ID`=$id";
      $stmt=$this->connect()->prepare($sql);
      if($stmt->execute())
      {
        echo 'Updated Successfully';
        header('Location:ShowAlbums.php');
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
      $sql="DELETE FROM `album` WHERE `ID`=$id";
      if($this->connect()->query($sql) == TRUE)
      {
        print "<script><alert>return confirm('Are you sure you want to delete this Reservartion') style='position: absolute;''><input type= 'submit' name='delete' id='delete' value='Delete Records'</alert></script>";
      }
      else
      {
        echo "There is a problem";
      }
      header("Location:ShowAlbums.php");
    }
    else
    {
      die('Id not found');
    }
  }
  public function getAlbumName()
  {
    return $this->albumname;
  }
  public function getImage()
  {
    return $this->image;
  }


}
 ?>
