<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Book Now </title>
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
    type="text/css" />
    <link rel="stylesheet" href="BOOK.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datepicker({minDate: 7
            });
        
        $n=new dbConnect();});
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
  
  <script type="text/javascript">
    function sendEmail() {

      Email.send({
        Host: "smtp.gmail.com",
        Username: "test1815007@gmail.com",
        Password: "123.asdf",
        To:"ahmed1815007@miuegypt.edu.eg",
        From: "test1815007@gmail.com",
        Subject: "New Reservation",
        Body:  "A new session has been booked, check out the details here:",

      })
    }
  </script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" 
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
        crossorigin="anonymous">
</script>
<script src="js/jquery.ccpicker.js"> $("#phone").CcPicker(); </script>
<link rel="stylesheet" href="css/jquery.ccpicker.css">


     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body>
  <div class="container">
    <div class="title">Book a session</div>
    <div class="content">
      <form action="BOOK.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
       
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your first name" name="fn" value="<?php if (isset($_POST["fn"])){ echo $_POST["fn"];}?>" >

          </div>
          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" placeholder="Enter your last name" name="ln" value="<?php if (isset($_POST["ln"])){ echo $_POST["ln"];}?>" >
          </div>

          <div class="input-box">
            <span class="details">Package Type</span>
                <input list="Package" name="package" placeholder="Select your package">
                <datalist id="Package">
                <?php $package=new UserValidation(); $package->displayPackage();?>
                </datalist>
          </div>


          <div class="input-box">
            <span class="details">Location</span>
            <input list="City"   placeholder="Enter session location" name="loc" autocomplete="off"  value="<?php if (isset($_POST["loc"])){ echo $_POST["loc"];}?>" >
            <datalist id="City"> 
            <?php $city=new UserValidation(); $city->displayCity()?>
            </datalist>
          </div>

          <div class="input-box">
            <span class="details">Session Date</span>
            <input autocomplete="off" type="text" id="txtdate" placeholder="MM--DD--YYYY" name="date" value="<?php if (isset($_POST["date"])){ echo $_POST["date"];}?>"  required>

          </div>


          <div class="input-box">
            <span class="details">session time</span>
            <input  type="Time" placeholder="select session time" name="time"   value='<?php if (isset($_POST["time"])) { echo $_POST["time"];}?>' >
          </div>


          <div class="input-box">
            <span class="details">phone</span>
            <input type="text" placeholder="Enter your phone number" id="phone" name="phone" value="<?php if (isset($_POST["phone"])){ echo $_POST["phone"];}?>" >
          </div>


          <div class="input-box">
            <span class="details">Description & comments</span>
            <input type="text" placeholder="Description & comments" name="Comment" value="<?php if (isset($_POST["Comment"])){ echo $_POST["Comment"];}?>" required>
          </div>
          <div class="input-box">
            <span class="details">Question</span>
            <input list="Questions"   placeholder="Enter session location" name="question" autocomplete="off"  value="<?php if (isset($_POST["question"])){ echo $_POST["question"];}?>" >
            <datalist id="Questions"> 
            <?php $city=new UserValidation(); $city->displayQuestions()?>
            </datalist>
          </div>
          <div class="input-box">
            <span class="details">Answer</span>
            <input type="text" placeholder="Enter your answer" name="qanswer" value="<?php if (isset($_POST["qanswer"])){ echo $_POST["qanswer"];}?>" >
          </div>
          
        </div>
        <div class="button">
          <input type="submit" name= "ahmed"  value="Book">
        </div>


      </form>
    </div>
  </div>

</body>


</html>
<?php include "Main_Nav.php";error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
<?php
$test= new UserValidation();
if (isset($_POST['ahmed'])) 
{
#echo "<script> sendEmail() </script>"; 
  $test->setData($_POST['fn'],$_POST['ln'],$_POST['phone'],$_POST['loc'],$_POST['package'],$_POST['date'],$_POST['time'],$_POST['Comment'],$_POST['question'],$_POST['qanswer']);
  $test->checkdate();
  $test->check_validation();
}


?>
