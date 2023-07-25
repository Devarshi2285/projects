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
    <link rel="stylesheet" href="/assets/css/user.css">
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
            <div class="container-2">
                <div class="wrap">
              <div class="nav-2">
                <ul>
                <li><a href="getdiet.php">Diet</a></li>
                        <li><a href="getworkout.php">Workout</a></li>
                        <li><a href="connecttrainer.php">Connect to trainer</a></li>
                </ul>
            </div>
            <div class="details">
                <div class="head">
                    <h2>Details</h2>
                </div>
                <div class="plan">
                        <div class="photo">
                            <div class="pic1"><img src="assets\images\vegetarian-diet-plan-732x549-thumbnail.jpg" alt=""></div>
                            <div class="pic2"><img src="assets\images\exerciseHowOften-944015592-770x533-1.webp" alt=""></div>
                        </div>
                        <div class="discription">
                            <h2>Full Plan:</h2>
                            <h4>(includes diat plan and exercise)</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere velit molestias quasi
                                voluptatem perspiciatis autem praesentium beatae, eaque quo accusantium quis laborum
                                consectetur obcaecati aliquam dignissimos aperiam, sapiente fugiat amet.</p>
                            <ul>
                                <li>Time:1 Year</li>
                                <li>Price:3000/-</li>
                            </ul>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        </div>
   
</body>

</html>