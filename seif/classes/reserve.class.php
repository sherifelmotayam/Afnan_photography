<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);    

  class reserve extends conn
    {
      public function viewprofile()
      {  
        $sql="SELECT * FROM booking";
        $stmt=$this->connect()->query($sql);
        while($row=$stmt->fetch())
        {
    
       print "<tr>";
       print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['ID']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['FirstName']." ".$row['LastName']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Time']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['City']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Comment']."</td>";
          print"<td style = 'text-align: center; font-size:20px; border:1px solid black;'><input type='checkbox' name='delete[]' value='".$row['Comment']." '></td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'><input type='checkbox' id='checkItem' name='checkbox[]' value='<? =.$id.; ?>' ></td>";
          print "</tr>";
          
          /*echo "<tr>";
          echo "<td>".$row['ID']."</td>";
          echo "<td><input type='checkbox' name=check[] value='".$row['ID']."'</td>";
          echo "<tr>";*/

        }
        echo "<div class='sub'><input type= 'submit' name='delete' id='delete' value='Delete Records'>";
        if(isset($_POST['delete']))
          {
            $checkbox = $_POST['check'];
            foreach($checkbox as $id)
            {
              //$del_id = $checkbox[$i]; 
               $dele="DELETE FROM `booking` where ID =".$id;
                $r=$this->connect()->query($dele);
                $message = "Data deleted successfully !";
                echo $message;
                echo $dele;
            }
      }

      }
    }


?>