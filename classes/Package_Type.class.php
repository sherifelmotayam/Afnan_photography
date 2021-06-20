<?php

class Package_Type extends conn
{
		public $ID;
  	public $PackageName;
	public function display()
	{
		$sql="SELECT * FROM `package type`";
		$stmt=$this->connect()->query($sql);
		while($row=$stmt->fetch())
        {
          print "<tr>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['ID']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Package_Name']."</td>";
           print "<div class='btn-group'><td>";
          print "<a class='btn btn-warning' href='EditPackage_Types.php?id=".$row['ID']."'>Edit</a>";
          print "<a class='btn btn-danger' onclick=\"javascript:return confirm('are you sure you want to delete this?');\" href='DeletePackage_Types.php?id=".$row['ID']."'>Delete</a><td> ";
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
			$sql="SELECT * FROM `package type` WHERE `ID`=$id";
			$result=$this->connect()->query($sql);
			//this mean that the id can't be dublicated
			if($result->rowCount() == 0)
			{
				die('ID isnot found in the database');
			}
			while($data=$result->fetch())
			{
				$this->ID= $data['ID'];
				$this->PackageName= $data['Package_Name'];
			}
		}	
		
	}
	public function getPackageName()
	{
		return $this->PackageName;
	}
  public function editData()
	{
		if(isset($_POST['submit']))
		{
			$id=$_POST['ID'];
			$Package_Name=$_POST['PackageName'];
			$sql="UPDATE `package type`  SET `Package_Name` = '$Package_Name' WHERE `ID`=$id";
			$stmt=$this->connect()->prepare($sql);
			if($stmt->execute())
			{
				echo 'Updated Successfully';
				header('Location:ShowPackage_Types.php');
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
			$sql="DELETE FROM `package type` WHERE `ID`=$id";
			if($this->connect()->query($sql) == TRUE)
			{
				echo "Deleted Successfully";
			}
			else
			{
				echo "There is a problem";
			}
			header("Location:ShowPackage_Types.php");
		}
		else
		{
			die('Id not found');
		}
	}
}
?>