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
    <link rel="stylesheet" href="/assets/css/addotherist.css">
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
                    <li>ABOUT US</li>
                    <li><button>FREE TRIAL</button></li>


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
                        <li><a href="otherinstrct.html">Other instruction</a></li>
                        <li><a href="connecttrainer.php">Connect to trainer</a></li>
                    </ul>
                </div>
                <div class="details">
                    <div class="head">
                        <h2>Other instrctions</h2>
                    </div>
                        <form action="" method="post">
                    <div class="username">
                        <lable>Username:</lable>
                        <select name="userid" id="userid">
                            <option value="">--Select Username--</option>
                            <?php
                                  foreach($rows_1 as $rows_1){
    
                                ?>
                                <option><?php 
                                        echo $rows_1['username'];
                                ?></option>                            

                            <?php } ?>
                        </select>
                    </div>
                    <div class="date">
                        <form action="" method="post">
                            <label>Date:</label>
                            <input type="date" name="in-date">
                        
                    </div>
                    <div class="enterinst">
                            <label for="">Enter instructions:</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>                    
                    <div class="submit-button">
                    <button type="submit" name="submit">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>