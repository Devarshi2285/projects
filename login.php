<?php
include('includes/connection.php');
session_start();
if (isset($_POST['submit'])) {
        $name_enter = $_POST['name'];
        $_SESSION["username"] = $name_enter;
        $password_enter = $_POST['password'];
        if ($_POST['ty'] == "trainer") {
                $type = "Trainer";
        } else {
                $type = "Client";
        }
        $sql = "SELECT * FROM `signup` WHERE username='" . $name_enter . "' AND password='" . $password_enter . "' AND type='" . $type . "'";
        $result = ($connection->query($sql));
        $rows = [];

        if ($result && $result->num_rows > 0) {
                $rows = $result->fetch_array(MYSQLI_ASSOC);
                if ($rows){
                        if($type=="Client"){
                                header("Location:/online.php");
                        }
                        else{
                                header("Location:/addworkout.php");
                        }
                }
        }

       
        

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/assets/css/include.css">
        <link rel="stylesheet" href="assets\css\login.css">
</head>

<body class="bg">
        <div class="container">
                <div class="bound">
                        <div class="container-2">
                                <div class="headding">
                                        <h2>LOGIN</h2>
                                </div>
                                <div class="error">
                                        <?php
                                        if (isset($name_enter) && isset($password_enter)) {

                                                if (!$rows) {
                                                        echo ("Username or password is incorrect");
                                                }
                                        }

                                        ?>
                                </div>
                                <form action="" method="post">
                                        <div class="usernumber">
                                                <div><label>UserName:</label></div>
                                                <div> <input type="text" name="name"></div>
                                        </div>
                                        <div class="password">
                                                <div><label>Password:</label></div>
                                                <div> <input type="password" name="password"></div>
                                        </div>
                                        <div class="type">
                                                <div><label>Type:</label></div>
                                                <div>Trainer<input type="radio" name="ty" id="trainer"
                                                                value="trainer">Client<input type="radio" name="ty"
                                                                id="client" value="client">
                                                </div>
                                        </div>
                                        <div class="forgotpassword">
                                                <div>Forgot Password?</div>
                                        </div>
                                        <div class="signup">
                                                <div><a href="signup.php">Sign Up</a></div>
                                        </div>
                                        <div class="login-button">
                                                <div><button name="submit">Login</button></div>
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
</body>
<script type="text/javascript">
        //window.history.forward();
        //function noBack() {
          //  window.history.forward();
        //}
</script>

</html>