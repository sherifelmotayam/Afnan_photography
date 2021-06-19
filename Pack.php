<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Main_Nav.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(isset($_POST['insert']))
{
    $t=new Packages();
    $t->displayPackages($_POST['city'],$_POST['Pack']);
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="pack.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Noto+Sans">
    <link rel="shortcut icon"  href="Images/LB_Editedb.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
  
<form action ="Pack.php" method="POST">
<label>Select City</label>
    <input list="City" name="city" style="margin-top: 150px;">
        <datalist id="City">
            <h2><?php $na=new Packages(); $na->ListOfCity();?></h2>
        </datalist>
        <lable>Select Type of Session</lable>
    <input list="Packages" name="Pack" style="margin-top: 150px;">
        <datalist id="Packages">
            <?php $n=new Packages(); $n->ListOfPack();?>
        </datalist>

<input type="submit" name="insert" id="myBtn" value="check" placeholder ="Add" style="margin-left: 100px;">
</form>

    <div class="pack">
    <div class="col">
        <div class="title"><h2><?php print $t->Event;?></h2></div>
    <img src="packphotos/3.jpeg">
    <div class="content">
        <ul>
            <li>
                <div class="dropdown">
                    <p><?php print $t->city; ?></p>
                     <p><?php print $t->price; ?></p>
                        <p><?php print $t->desc; ?></p>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span></span>
                    <div class="dropdown-content">
                        <p></p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span></span>
                    <div class="dropdown-content">
                        <p></p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span></span>
                    <div class="dropdown-content">
                        <p></p>
                    </div>
                </div>
            </li>

        </ul>
        <div class="triangle-up"></div>
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>

        
    </div>
    </div>

<div class="col">
    <div class="title"><h2>Engagment</h2></div>
    <img src="packphotos/1.jpeg">
    <div class="content">
        
        <ul>
            
            <li>
                <div class="dropdown">
                    <span>Cairo</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>ismailia</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>zagazig</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>

        </ul>
            <div class="triangle-up"></div>
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>
    </div>
</div>
    <div class="col">
    <div class="title"><h2>Casual</h2></div>
    <img src="packphotos/2.jpeg">
    <div class="content">
        <ul>
            
            <li>
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>ismailia</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>zagazig</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>

        </ul>
        <div class="triangle-up"></div>
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>
    </div>
</div>
    <div class="col">
    <div class="title"><h2 id="other">Other</h2></div>
    <img src="packphotos/4.jpeg">
    <div class="content">
        <ul>
            
            <li>
                <div class="dropdown">
                    <span>Cairo</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>ismailia</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>zagazig</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>

        </ul>
        <div class="triangle-up"></div> 
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>
        
    </div>
    </div>
    </div>
</body>
</html>

