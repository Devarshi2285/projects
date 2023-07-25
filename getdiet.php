<?php

    include('includes/connection.php');
    session_start();
     $counter=0;
    if(isset($_POST['submit'])){
        $date=$_POST['in-date'];
        $name=$_SESSION['username'];
        $sql="SELECT * FROM `diet` WHERE username='" . $name . "' AND date='" . $date . "'";
        $result=($connection->query($sql));
        $rows = [];        
        if ($result && $result->num_rows > 0) {
            $rows = $result->fetch_array(MYSQLI_ASSOC);
    }
        $counter=1;   
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/getdiet.css">
    <link rel="stylesheet" href="/assets/css/include.css">
    <title>Document</title>
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
                <form method="post">
                    <div class="workout-details">
                        <div class="title">Diet:</div>
                    </div>
                    <div class="date">
                        <form action="" method="post">
                            <label>Date:</label>
                            <input type="date" name="in-date">
                        
                    </div>
                    <div class="submitdate">
                        <button type="submit" name="submit">Get Diet</button>
                    </div>
                    </form>
                    <div class="body">
                        <table>
                            <tr>
                                <div class="title-1">
                                    <th>
                                        <h1>Item</h1>
                                    </th>
                                </div>
                                <div class="title-2">
                                    <th>
                                        <h1>Time</h1>
                                    </th>
                                </div>
                                <div class="title-3">
                                    <th>
                                        <h1>Quentity</h1>
                                    </th>
                                </div>

                            </tr>
                            <?php if(isset($_POST['submit'])){
                                if($rows){
                              for($i=1;$i<=15;$i++) {?>
                            <tr>
                                <td>
                                    <div class="item">
                                        <p><?php 
                                        
                                        if($rows["item-$i"]!=""){
                                               echo $rows["item-$i"];
                                        }
                                
                                        ?></p>
                                    </div>
                                </td>
                                <td>
                                    <div class="time">
                                    <p><?php 
                                    if($rows){
                                        if($rows["time-$i"]!=""){
                                               echo $rows["time-$i"];
                                        }
                                    }
                                        ?></p>
                                    </div>
                                </td>
                                <td>
                                    <div class="qu">
                                        <p><?php 
                                        
                                        if($rows["qu-$i"]!=""){
                                               echo $rows["qu-$i"];
                                        }
                                
                                        ?></p>
                                    </div>
                                </td>
                            </tr>
                            <?php }
                            }
                         } ?>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>

    </div>
</body>

</html>