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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/include.css">
</head>

<body class="bg">

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
        <div class="welcome">

            <h1>Welcome to TRAINEE</h1>

        </div>

        <div class="middle-top">
            <div class="intro-img">
                <img src="assets\images\fotor_2023-3-16_23_3_7.jpg" alt="">
            </div>

            <div class="intro-para">
                <p>Both, health and fitness are closely inter-related to each other. Both are necessary for the human
                    being to live a happy and healthy life. There are various things we have to take care all through
                    the life in order be healthy and fit. There is no alternate to the health and fitness, we have to
                    eat healthy food timely, do physical exercises daily, think positive and have patience and
                    commitment towards good lifestyle. Being involved in physical activities on daily basis does
                    something great to our body and mind.</p>
            </div>
        </div>
        <div class="icon-bar">
            <ul>
                <li>
                    <diV class="icon-img"><img src="assets\images\download.png" alt=""></diV>
                    <div class="icon-text">worldwide</div>
                </li>
                <li>
                    <diV class="icon-img"><img
                            src="assets\images\home-personal-training-logo-design-template-idea-home-personal-training-logo-design-template-idea-logos-vector-based-built-192144686 (1).jpg"
                            alt=""></diV>
                    <div class="icon-text">Personal Traning</div>
                </li>
                <li>
                    <diV class="icon-img"><img src="assets\images\istockphoto-1263806741-612x612.jpg" alt=""></diV>
                    <div class="icon-text">Expert Trainer</div>
                </li>
                <li>
                    <diV class="icon-img"><img src="assets\images\gym-building-icon-vector-20755585 (1).jpg" alt="">
                    </diV>
                    <div class="icon-text">Offline Center</div>
                </li>
                <li>
                    <diV class="icon-img"><img src="assets\images\diet-plan-rubber-stamp-vector-17694039 (1).jpg"
                            alt=""></diV>
                    <div class="icon-text">Diet Plan</div>
                </li>
            </ul>
        </div>
    </div>
   
    <div class="coustemer">
        <div class="head">
            <H1>Our Top Clients:</H1>
        </div>
        <div class="bound">
            <div class="name">
                <li>Vidyut Jamval:</li>
            </div>
            <div class="pic">
                <img src="assets/images/Vidyut-Jamwal.webp" alt="">
            </div>
            <div class="review">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eligendi doloremque suscipit
                    consectetur nesciunt dignissimos nisi? Minus laudantium expedita recusandae illum similique quam
                    corporis natus ad rem molestiae. Rerum, illo exercitationem! Quod, voluptatem eveniet!</p>
            </div>
        </div>
        <div class="bound">
            <div class="name">
                <li>Tiger Shroff:</li>
            </div>
            <div class="pic">
                <img src="assets\images\tiger-shroff.jpg" alt="">
            </div>
            <div class="review">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eligendi doloremque suscipit
                    consectetur nesciunt dignissimos nisi? Minus laudantium expedita recusandae illum similique quam
                    corporis natus ad rem molestiae. Rerum, illo exercitationem! Quod, voluptatem eveniet!</p>
            </div>
        </div>
        <div class="bound">
            <div class="name">
                <li>Hrithik Roshan:</li>
            </div>
            <div class="pic">
                <img src="assets/images/hrithik-roshan.jpg" alt="">
            </div>
            <div class="review">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eligendi doloremque suscipit
                    consectetur nesciunt dignissimos nisi? Minus laudantium expedita recusandae illum similique quam
                    corporis natus ad rem molestiae. Rerum, illo exercitationem! Quod, voluptatem eveniet!</p>
            </div>
        </div>
    </div>


</body>
</html>