<?php
session_start();
include('includes/connection.php');
$sql = "SELECT * FROM `signup`";
$result = ($connection->query($sql));
$rows = [];
$count=0;

if ($result && $result->num_rows > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
}
if (isset($_POST['submit-2'])) {
    if($_POST['userid']=="" && $date = $_POST['date']==""){

        $count=1;
    }
    else{
    $username = $_POST['userid'];
    $date = $_POST['date'];
    
    for ($i = 0; $i < 17; $i++) {
        if(isset($_POST['exersize'][$i]) && isset($_POST['quentity'][$i])){
        $ex[$i] = $_POST['exersize'][$i];
        $qu[$i] = $_POST['quentity'][$i];
        }
        else{
            $ex[$i] ="";
            $qu[$i] ="";
        }
    }
        $sql_2 = "INSERT INTO `excersize`(`username`, `date`, `ex-1`, `no-ex-1`, `ex-2`, `no-ex-2`, `ex-3`, `no-ex-3`, `ex-4`, `no-ex-4`, `ex-5`, `no-ex-5`, `ex-6`, `no-ex-6`, `ex-7`, `no-ex-7`, `ex-8`, `no-ex-8`, `ex-9`, `no-ex-9`, `ex-10`, `no-ex-10`, `ex-11`, `no-ex-11`, `ex-12`, `no-ex-12`, `ex-13`, `no-ex-13`, `ex-14`, `no-ex-14`, `ex-15`, `no-ex-15`, `ex-16`, `no-ex-16`, `ex-17`, `no-ex-17`)
        VALUES ('" . $username . "','" . $date . "','" . $ex[0] . "','" . $qu[0] . "','" . $ex[1] . "','" . $qu[1] . "','" . $ex[2] . "','" . $qu[2] . "','" . $ex[3] . "','" . $qu[3] . "','" . $ex[4] . "','" . $qu[4] . "','" . $ex[5] . "','" . $qu[5] . "','" . $ex[6] . "','" . $qu[6] . "','" . $ex[7] . "','" . $qu[7] . "','" . $ex[8] . "','" . $qu[8] . "','" . $ex[9] . "','" . $qu[9] . "','" . $ex[10] . "','" . $qu[10] . "','" . $ex[11] . "','" . $qu[11] . "','" . $ex[12] . "','" . $qu[12] . "','" . $ex[13] . "','" . $qu[13] . "','" . $ex[14] . "','" . $qu[14] . "','" . $ex[15] . "','" . $qu[15] . "','" . $ex[16] . "','" . $qu[16] . "')";
        if($connection->query($sql_2)){
                echo "Done";
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
    <link rel="stylesheet" href="/assets/css/addworkout.css">
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
                        <h2>Add Exersize:</h2>
                    </div>
                    <?php if($count) {?>
                    <div class="alert">
                        <h2>Enter Userid and Date please:</h2>
                    </div>
                    <?php }?>
                    <form action="" method="post">
                        <div class="userid">

                            <div>
                                <label>Userid:</label>
                                <select id="exer" name="userid">
                                    <option value="">Select Userid</option>
                                    <?php
                                    foreach ($rows as $row) {
                                        ?>
                                        <option>
                                            <?php echo $row['username']; ?>
                                        </option>
                                    <?php } ?>
                                </select>

                            </div>

                        </div>
                        <div class="date">
                            <label for="">Date:</label>
                            <input type="date" name="date">
                        </div>
                        <?php for ($i = 1; $i <= 17; $i++) { ?>

                            <div class="addex" id="exersize-<?php echo $i ?>"
                                style="<?php echo $i > 5 ? 'display: none' : '' ?>">
                                <div class="ex">
                                    <label for="exer">Enter Exersize:</label>
                                    <select id="exer" name="exersize[]">
                                        <option value="">--SELECT--</option>
                                        <option value="pushup">Pushup</option>
                                        <option value="plank">Plank</option>
                                        <option value="Lunges">Lunges</option>
                                        <option value="Squats">Squats</option>
                                        <option value="Dumbbellrows">Dumbbell rows</option>
                                        <option value="Single-leg deadlifts">Single-leg deadlifts</option>
                                        <option value="Burpees">Burpees</option>
                                        <option value="plank">Plank</option>
                                        <option value="plank">Plank</option>
                                        <option value="plank">Plank</option>
                                    </select>
                                </div>
                                <div class="quentity">
                                    <textarea name="quentity[]" id="" cols="15" rows="1"></textarea>
                                </div>
                                <?php if ($i == 1) { ?>
                                    <div class="button">
                                        <div><button name="add" onclick="myFunction()" type="button">+Add</button></div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div class="submit-button">
                            <button name="submit-2">Post Exersize</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var counter = 6;
        function myFunction() {
            var x = document.getElementById("exersize-" + counter);
            if (counter >= 17) { return; }
            x.style.display = "block";
            counter++;
        }
    </script>
</body>
</html>