<?php
include("includes\connection.php");
        session_start();
                if(isset($_POST['cource'])){
                if(isset($_SESSION["username"])){
                    if($_POST['cource']=="c-1"){
                        
                    header("Location:/c-1.php");
                    
                }
                else if($_POST['cource']=="c-2"){
                    
                header("Location:/c-2.php");
                }
                else if($_POST['cource']=="c-3"){
                    
                header("Location:/c-3.php");
                }
                    
                }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/include.css">
    <link rel="stylesheet" href="assets\css\onlline.css">
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
                        <li><a href="hybride.php">Hybrid</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bound">
            <div class="container-2">
                <div class="headder-2">
                    <h2>Online Courses:</h2>
                </div>
                <form action="" method="post">
                <div class="wrap">
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
                        <div class="buy"><button name="cource" value="c-1" type="submit">Buy Now</button></div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="plan">
                        <div class="photo">
                            <div class="pic1"><img src="assets\images\exerciseHowOften-944015592-770x533-1.webp" alt=""></div>
                            <div class="pic2"><img
                                    src="assets\images\home-workout-flat-composition-with-collage-domestic-sport-exercises-gymnastic-apparatus-human-characters-text-vector-illustration_1284-80811.avif"
                                    alt=""></div>
                        </div>
                        <div class="discription">
                            <h2>Only Workout:</h2>
                            <h4>(includes only exercise)</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere velit molestias quasi
                                voluptatem perspiciatis autem praesentium beatae, eaque quo accusantium quis laborum
                                consectetur obcaecati aliquam dignissimos aperiam, sapiente fugiat amet.</p>
                            <ul>
                                <li>Time:1 Year</li>
                                <li>Price:2300/-</li>
                            </ul>
                        </div>
                        <div class="buy"><button name="cource" value="c-2" type="submit">Buy Now</button></div>
                    </div>
                </div>
                <div class="wrap">
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
                                <li>Time:6 Months</li>
                                <li>Price:1900/-</li>
                            </ul>
                        </div>
                        <div class="buy"><button name="cource" value="c-3" type="submit">Buy Now</button></div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>