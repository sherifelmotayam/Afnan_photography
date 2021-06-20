<?php

class Packages extends conn
{
	public $ID;
  	public $ID_Type;
  	public $Descrition;
  	public $price;
  	public $city;
	public function display()
	{
		$sql="SELECT * FROM `packages`";
		$stmt=$this->connect()->query($sql);
		while($row=$stmt->fetch())
        {
          print "<tr>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['ID']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['ID_Package_Type']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Description']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Price']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['City']."</td>";
           print "<div class='btn-group'><td>";
          print "<a class='btn btn-warning' href='EditPackages.php?id=".$row['ID']."'>Edit</a>";
          print "<a class='btn btn-danger' onclick=\"javascript:return confirm('are you sure you want to delete this?');\"href='DeletePackages.php?id=".$row['ID']."'>Delete</a><td> ";
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
      $sql="SELECT * FROM `packages` WHERE `ID`=$id";
      $result=$this->connect()->query($sql);
      //this mean that the id can't be dublicated
      if($result->rowCount() == 0)
      {
        die('ID isnot found in the database');
      }
      while($data=$result->fetch())
      {
        $this->ID= $data['ID'];
        $this->ID_Type= $data['ID_Package_Type'];
        $this->Description= $data['Description'];
        $this->Price =$data['Price'];
        $this->City =$data['City'];
      }
    } 
    
  }
  public function editData()
	{
		if(isset($_POST['submit']))
		{
			$id=$_POST['ID'];
			$ID_Type=$_POST['ID_Type'];
			$Description=$_POST['Description'];
			$price=$_POST['Price'];
			$City=$_POST['City'];
			$sql="UPDATE `packages`  SET `ID_Package_Type`= '$ID_Type',`Description` = '$Description' ,`Price` = '$price', `City` = '$City' WHERE `ID`=$id";
			$stmt=$this->connect()->prepare($sql);
			if($stmt->execute())
			{
				echo 'Updated Successfully';
				header('Location:ShowPackages.php');
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
			$sql="DELETE FROM `packages` WHERE `ID`=$id";
			if($this->connect()->query($sql) == TRUE)
			{
				echo "Deleted Successfully";
			}
			else
			{
				echo "There is a problem";
			}
			header("Location:ShowPackages.php");
		}
		else
		{
			die('Id not found');
		}
	}
  public function getCity()
  {
    return $this->City;
  }
  public function getDescription()
  {
    return $this->Description;
  }
  public function getPrice()
  {
    return $this->Price;
  }
  public function Type()
  {
    return $this->ID_Type;
  }
  public function displayPackages($city,$packType)
    {
        $this->city=$city;
        $this->Event=$packType;
        $sql="SELECT `ID` FROM `package type` WHERE `Package_Name`= '".$packType."'";
        $stmt=$this->connect()->query($sql);
        while($rows=$stmt->fetch())
        {
            $this->ID=$rows['ID'];
        }
        $sql2="SELECT * FROM `packages` WHERE City ='$city' AND ID_Package_Type ='.$this->ID.' ";
        $stmt=$this->connect()->query($sql2);
        while($row=$stmt->fetch())
        {
            $this->price=$row['Price'];
            $this->desc=$row['Description'];
        }
    }
    public function ListOfCity()
   {
      $sql = "SELECT DISTINCT CityName FROM `city`";
      $stmt=$this->connect()->query($sql);
      while($row=$stmt->fetch())
      {
        echo '<option value="'.$row['CityName'].'">'.$row['CityName'].'</option>' ;
        echo $row['CityName'];
      }     
   }
  public function ListOfPack()
  {
      $sql = "SELECT DISTINCT Package_Name FROM `package type`";
      $stmt=$this->connect()->query($sql);
      while($row=$stmt->fetch())
      {
        echo '<option value="'.$row['Package_Name'].'">'.$row['Package_Name'].'</option>' ;
        echo $row['Package_Name'];
      }   
  }

}
?>