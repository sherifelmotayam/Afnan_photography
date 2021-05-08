<?php
    
    include 'Admin.php'; 
    
    
    if(isset($_POST['Add']))
    {
     
        
    }
    
    ?>
    
 
<html>
    
    
    <head>
        	<link rel="stylesheet" type="text/css" href="AddAdmin.css">

        
    </head>
    
  
 
    
    <body>
        <h1>Add Admin</h1>
        <div class="form" >

        <form action="AddAdmin.php" method="post" enctype="multipart/form-data" id="Get data" >
           
         
           <label> 
           <input type=file name="image" id="image" class="inputfile" >
               <label for="image">Upload profile picture</label>
            </label>
               <br>
           <label>
           <input type = "text" name = "First Name" placeholder="Firt Name"> 
           
           <input type = "text" name = "Last Name" placeholder="Last Name">  
            </label>
            <br>
            <br>
           
           <label>
           <input type = "number" name = "Phone Number" placeholder="Phone number ">  
           
           
           <input type = "email" name = "Email" placeholder="Email"> 
            </label>
            <br>
            <br>
           <label>
           <input type = "password" name = "Password" placeholder="Password">  <br>
           
           
           <input type = "password" name = "Re-password" placeholder="Re-password">  <br>
            </label>
           <br>
            <br>
            
           <input type = "submit" name = "Add" value = "Add Admin" style="width:120px ">
            
            
           

        </form>
        </div>
                  </body>
        
    
    
</html>