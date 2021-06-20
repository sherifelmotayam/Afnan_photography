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
public function display()
  {
    $sql="SELECT * FROM `images`";
    $stmt=$this->connect()->query($sql);
    while($row=$stmt->fetch())
        {
          print "<tr>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['ID']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Image_Name']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Image_Description']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Image_Type']."</td>";
          print "<div class='btn-group'><td>";
          print "<a class='btn btn-warning' href='EditImages.php?id=".$row['ID']."'>Edit</a>";
          print "<a class='btn btn-danger' onclick='return confirm('Are you sure you want to delete this Reservartion')' style='position: absolute;' href='DeleteImages.php?id=".$row['ID']."'>Delete</a><td> ";
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
      $sql="SELECT * FROM `images` WHERE `ID`=$id";
      $result=$this->connect()->query($sql);
      //this mean that the id can't be dublicated
      if($result->rowCount() == 0)
      {
        die('ID isnot found in the database');
      }
      while($data=$result->fetch())
      {
        $this->ID= $data['ID'];
        $this->Image_Name= $data['Image_Name'];
        $this->Image_Description= $data['Image_Description'];
        $this->Image_Type =$data['Image_Type'];
      }
    } 
    
  }
  public function editData()
  {
    if(isset($_POST['submit']))
    {
      $id=$_POST['ID'];
      $Image_Name=$_POST['ImageName'];
      $Image_Description=$_POST['ImageDescription'];
      $Image_Type=$_POST['ImageType'];
      $sql="UPDATE `images`  SET `Image_Name` = '$Image_Name' ,`Image_Description` = '$Image_Description', `Image_Type` = '$Image_Type' WHERE `ID`=$id";
      $stmt=$this->connect()->prepare($sql);
      if($stmt->execute())
      {
        echo 'Updated Successfully';
        header('Location:ShowImages.php');
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
      $sql="DELETE FROM `image` WHERE `ID`=$id";
      if($this->connect()->query($sql) == TRUE)
      {
        print "<script><alert>return confirm('Are you sure you want to delete this Reservartion') style='position: absolute;''><input type= 'submit' name='delete' id='delete' value='Delete Records'</alert></script>";
      }
      else
      {
        echo "There is a problem";
      }
      header("Location:ShowImages.php");
    }
    else
    {
      die('Id not found');
    }
  }
  public function getImageName()
  {
    return $this->Image_Name;
  }
  public function getImageDescription()
  {
    return $this->Image_Description;
  }
  public function getImageType()
  {
    return $this->Image_Type;
  }
}

 ?>
