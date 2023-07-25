<?php
        session_start();
        include('includes\connection.php');
        $sql = "SELECT * FROM `signup`";
        $result = ($connection->query($sql));
        $rows = [];

   if ($result && $result->num_rows > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
  }
  if(isset($_POST['submit-2'])){
    
    /*if($_POST['userid']=="" &&  $_POST['date']==""){
        $count=1;
    }
    else{*/
    $username = $_POST['userid'];
    $date = $_POST['date'];
    
    
    for ($i = 0; $i < 15; $i++) {
      
        if(($_POST['item'][$i]!="" &&  $_POST['time'][$i]!="") && $_POST['qu'][$i]!=""){
            $it[$i] = $_POST['item'][$i];
            $ti[$i] = $_POST['time'][$i];
            $qu[$i] = $_POST['qu'][$i];
            }
            else{
                $it[$i] = "";
                $ti[$i] = "";
                $qu[$i] = "";
            }
        
    }
            $sql_2="INSERT INTO `diet`(`username`, `date`, `item-1`, `time-1`, `qu-1`, `item-2`, `time-2`, `qu-2`, `item-3`, `time-3`, `qu-3`, `item-4`, `time-4`, `qu-4`, `item-5`, `time-5`, `qu-5`, `item-6`, `time-6`, `qu-6`, `item-7`, `time-7`, `qu-7`, `item-8`, `time-8`, `qu-8`, `item-9`, `time-9`, `qu-9`, `item-10`, `time-10`, `qu-10`, `item-11`, `time-11`, `qu-11`, `item-12`, `time-12`, `qu-12`, `item-13`, `time-13`, `qu-13`, `item-14`, `time-14`, `qu-14`, `item-15`, `time-15`, `qu-15`) 
        VALUES ('" . $username . "','" . $date . "','" . $it[0] . "','" . $ti[0] . "','" . $qu[0] . "','" . $it[1] . "','" . $ti[1] . "','" . $qu[1] . "','" . $it[2] . "','" . $ti[2] . "','" . $qu[2] . "','" . $it[3] . "','" . $ti[3] . "','" . $qu[3] . "','" . $it[4] . "','" . $ti[4] . "','" . $qu[4] . "','" . $it[5] . "','" . $ti[5] . "','" . $qu[5] . "','" . $it[6] . "','" . $ti[6] . "','" . $qu[6] . "','" . $it[7] . "','" . $ti[7] . "','" . $qu[7] . "','" . $it[8] . "','" . $ti[8] . "','" . $qu[8] . "','" . $it[9] . "','" . $ti[9] . "','" . $qu[9] . "','" . $it[10] . "','" . $ti[10] . "','" . $qu[10] . "','" . $it[11] . "','" . $ti[11] . "','" . $qu[11] . "','" . $it[12] . "','" . $ti[12] . "','" . $qu[12] . "','" . $it[13] . "','" . $ti[13] . "','" . $qu[13] . "','" . $it[14] . "','" . $ti[14] . "','" . $qu[14] . "')";
        
        
    
        if($connection->query($sql_2)){
            echo "Done";
    }        

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\adddiet.css">
    <link rel="stylesheet" href="/assets/css/include.css">    
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
                        <h2>Add Diet:</h2>
                    </div>
                    <form action="" method="post">
                    <div class="username">
                        <lable>Username:</lable>
                        <select name="userid" id="userid">
                            <option value="">--Select Username--</option>
                            <?php
                                  foreach($rows as $row){
    
                                ?>
                                <option><?php 
                                        echo $row['username'];
                                ?></option>                            

                            <?php } ?>
                        </select>
                    </div>
                    <div class="date">
                        <label for="">Date:</label>
                        <input type="date" name="date">
                    </div>
                    <?php for($i=1 ; $i<=15 ;$i++) { ?>
                    <div class="add-diet"  id="diet-<?php echo $i ?>"  style="<?php echo $i > 5 ? 'display: none' : '' ?>">
                                    <div class="dish-name">
                                        <div class="name">Dish-name:</div>
                                        <div class="enter-name"><textarea name="item[]" id="" cols="10" rows="2"></textarea></div>
                                    </div>
                                    <div class="dish-time">
                                      <div class="time">Time:</div>
                                        <div class="enter-time"><textarea name="time[]" id="" cols="10" rows="2"></textarea></div>
                                    </div>
                                    <div class="dish-que">
                                      <div class="que">Quentity:</div>
                                        <div class="enter-que"><textarea name="qu[]" id="" cols="10" rows="2"></textarea></div>
                                    </div>
                                    <?php if($i==1){ ?>
                                    <div class="add-button">
                                    <div><button name="add" onclick="myFunction()" type="button">+Add</button></div>
                                    </div>
                                    <?php }?>
                    </div>
                    <?php } ?>
                    <div class="submit-button">
                    <button type="submit" name="submit-2">Post Diet</button>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
        var counter = 6;
        function myFunction() {
            var x = document.getElementById("diet-" + counter);
            if (counter > 15) { return; }
            x.style.display = "block";
            counter++;
        }

        


    </script>
</html>