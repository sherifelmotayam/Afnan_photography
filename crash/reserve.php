<?php
    declare(strict_types=1 );
    include 'Admin.php';
    include 'includes/class-autoloaded.php';

?>
  <head>
    <link rel="stylesheet" type="text/css" href="reserve.css">
  </head>
  <body>
    <form action="reserve.php" method="POST">
            <table style = "border-collapse: collapse; width:50%; border:1px solid black;">
      <tr> 
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> ID </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> Name </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> Time </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> City </th>
          <th style='text-align: center; font-size:20px; border:1px solid black;'>Comment</th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> Select </th>
      </tr>
    <?php
  
    ?>
    <?php
    $get=new reserve();
    $get->viewprofile();

    ?>
    </table>
   
        </div>
     </form>
  </body>