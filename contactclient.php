<?php
    session_start();

        include('includes\connection.php');
        $sql_1 = "SELECT * FROM `signup`";
        $result_1 = ($connection->query($sql_1));
        $rows_1 = [];

   if ($result_1 && $result_1->num_rows > 0) {
    $rows_1 = $result_1->fetch_all(MYSQLI_ASSOC);
  }
        if(isset($_POST['submit'])){
            
                $sql="SELECT * FROM `signup` WHERE username='" . $_POST['userid'] . "'";
                $result = ($connection->query($sql));
                $rows = [];
        
                if ($result && $result->num_rows > 0) {
                        $rows = $result->fetch_array(MYSQLI_ASSOC);
                }
        }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\include.css">
    <link rel="stylesheet" href="assets\css\ctt.css">
    <title>Document</title>
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
                        <li><a href="adddiet.php">Add Diet</a></li>
                        <li><a href="addworkout.php">Add Exersize</a></li>
                        <li><a href="contactclient.php">Connect to Cilent</a></li>
                    </ul>
                </div>
                <div class="details">
                    <div class="head">
                        <h2>Connect to Client:</h2>
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
                    <div class="submit-button">
                    <button type="submit" name="submit">Get details</button>
                        </div>
                    </form>
                    <div class="contact">
                        <div class="mo">
                                    <?php if(isset($_POST['submit'])){
                                    if($rows){ ?>
                                        <h3>Contact No:</h3>
                                        <?php echo $rows['phone']?>                                            

                                            <?php  }
                                            } ?>
                        </div>
                    </div>
                    <div class="contact">
                        <div class="mo">
                                    <?php if(isset($_POST['submit'])){
                                    if($rows){ ?>
                                        <h3>Email id:</h3>
                                        <?php echo $rows['mail']?>                                            

                                            <?php  }
                                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>