<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/include.css">
    <link rel="stylesheet" href="/assets/css/courses.css">
</head>
<body>
<header>
        <div class="container">
            <div class="logo">
                <a href="base.php"><img src="assets\images\logo.jpg" alt=""></a>
            </div>
            <nav class="nav-1">

                <ul>
                    <li><a href="contact us.php">CONTACT US</a></li>
                    <?php if(isset($_SESSION['username'])){ ?> 
                    <li><a href="logout.php">LOGOUT</a></li><?php } ?>
                   
                    <li><a href="login.php"><?php
                            if(isset($_SESSION['username'])==""){
                                echo "LOGIN";
                            }
                    
                    ?>
                    </a></li>
                    <li><a href="courses.php">COURCES</a></li>
                    <li><a href="aboutus.html">ABOUT US</a></li>
                    <li><a href="free.html">FREE TRIAL</a></li>


                </ul>

            </nav>
        </div>

    </header>
        <div class="container">
            <div class="bound">
            <div class="container-2">
                <div class="headder">
                    <h2>COURSE</h2>
                </div>
                <div class="options">
                    <ul>
                        <li><a href="offline.php">Offline</a></li>
                        <li><a href="online.php">Online</a></li>
                        <li><a href="hybride.php">Hybride</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>