<?php
include('includes/connection.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];
    $dob = $_POST['dob'];
    $gender = "";
    if (isset($_POST['ge'])) {
        $gender = $_POST['ge'];
    }
    $type = "";
    if (isset($_POST['ge'])) {
        if($_POST['ty']=="trainer"){
            $type="Trainer";
        }
        else{
            $type="Client";
        }

    }
    $other = $_POST['other'];
    $count = 0;
    if ($name == "") {
        $count = 1;
    }

    if ($username == "") {

        $count = 1;
    }
    if ($phone == "") {
        $count = 1;
    }
    if (strlen($phone) != 10) {
        $count = 1;
    }
    if ($mail == "") {
        $count = 1;
    }
    if ($pass == "") {
        $count = 1;
    }
    if ($repass == "") {
        $count = 1;
    }
    if ($pass != $repass) {
        $count = 1;
    }
    if ($dob == "") {
        $count = 1;
    }
    if ($gender == "") {
        $count = 1;
    }
    if ($type == "") {
        $count = 1;
    }
    $sql_2 = "SELECT * FROM `signup` WHERE username='".$username."' OR phone='".$phone."' OR mail='".$mail."'";
    $result = ($connection->query($sql_2));
    
    if($result){
        $count=1;
    }

    if ($count == 0) {
        $sql = "INSERT INTO `signup`(`name`,`username`, `phone`, `mail`, `password`, `repassword`, `dob`, `gender`,`type`, `other`) 
    VALUES ('" . $name . "','" . $username . "','" . $phone . "','" . $mail . "','" . $pass . "','" . $repass . "','" . $dob . "','" . $gender . "','" . $type . "','" . $other . "')";

        if ($connection->query($sql) === TRUE) {
            echo "New record created successfully";
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
    <link rel="stylesheet" href="assets\css\signup.css">
</head>

<body>
    <div class="container">
        <div class="bound">
            <div class="container-2">
                <div class="headding">
                    <h2>Sign Up</h2>
                </div>
                <form name="form_1" action="" method="post" onsubmit="return validateform()">
                    <div class="name">
                        <div><label>Name:</label></div>
                        <div> <input type="text" name="name" id="name"></div>
                        <div class="error">
                            <?php
                            if (isset($name)) {
                                if ($name == "") {
                                    echo "Please Enter your name";
                                }
                            }

                            ?>
                        </div>
                    </div>
                    <div class="username">
                        <div><label>UserName:</label></div>
                        <div> <input type="text" name="username" id="username"></div>
                        <div class="error">
                            <?php
                            if (isset($username)) {
                                if ($username == "") {
                                    echo "Please Enter your username";
                                }
                            }
                            if(isset($result)){
                                $rows = [];

                             if ($result && $result->num_rows > 0) {
                             $rows = $result->fetch_array(MYSQLI_ASSOC);
                             }
                             if($rows){
                                echo"Username already taken";
                             }
                            }

                            ?>
                        </div>
                    </div>
                    <div class="inputnumber">
                        <div><label>Phone Number:</label></div>
                        <div> <input type="tel" name="phone" id="phone"></div>
                        <div class="error">
                            <?php
                            if (isset($phone)) {
                                if ($phone == "") {
                                    echo "Please Enter your Mobilenumber";
                                }
                            }
                            if(isset($result)){
                                $rows = [];

                             if ($result && $result->num_rows > 0) {
                             $rows = $result->fetch_array(MYSQLI_ASSOC);
                             }
                             if($rows){
                                echo"Mobilenumber already exits";
                             }
                            }

                            ?>
                        </div>
                    </div>
                    <div class="inputmail">
                        <div><label>Email-id:</label></div>
                        <div><input type="email" name="mail" id="mail"></div>
                        <div class="error">
                            <?php
                            if (isset($mail)) {
                                if ($mail == "") {
                                    echo "Please Enter your mail";
                                }
                            }
                            if(isset($result)){
                                $rows = [];

                             if ($result && $result->num_rows > 0) {
                             $rows = $result->fetch_array(MYSQLI_ASSOC);
                             }
                             if($rows){
                                echo"E-mail already exits";
                             }
                            }

                            ?>
                        </div>
                    </div>
                    <div class="inputpassword">
                        <div><label>Create Password:</label></div>
                        <div> <input type="password" name="password" id="password"></div>
                        <div class="error">
                            <?php
                            if (isset($pass)) {
                                if ($pass == "") {
                                    echo "Please Enter your Password";
                                }
                            }

                            ?>
                        </div>
                    </div>
                    <div class="reenterpassword">
                        <div><label>Re-Enter your password:</label></div>
                        <div> <input type="password" name="repassword" id="repassword"></div>
                        <div class="error">
                            <?php
                            if (isset($repass)) {
                                if ($repass == "") {
                                    echo "Please Re-enter your password";
                                }

                                if ($repass != "") {
                                    if ($pass != $repass) {
                                        echo "Re-enter password as above";
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="dob">
                        <div><label>Enter your DOB:</label></div>
                        <div><input type="date" name="dob" id="dob"></div>
                        <div class="error">
                            <?php
                            if (isset($dob)) {
                                if ($dob == "") {
                                    echo "Please Enter your Date of Birth";
                                }
                            }

                            ?>
                        </div>
                    </div>
                    <div class="gender">
                        <div><label>Gender:</label></div>
                        <div>Male<input type="radio" name="ge" id="male">Female <input type="radio" name="ge"
                                id="female">
                        </div>
                        <div class="error">
                            <?php
                            if (isset($gender)) {
                                if ($gender == "") {
                                    echo "Please Enter your gender";
                                }
                            }

                            ?>
                        </div>
                    </div>
                    <div class="gender">
                        <div><label>Type:</label></div>
                        <div>Trainer<input type="radio" name="ty" id="trainer" value="trainer">Client<input type="radio" name="ty"
                                id="client" value="client">
                        </div>
                        <div class="error">
                            <?php
                            if (isset($client)) {
                                if ($client == "") {
                                    echo "Please Enter your type";
                                }
                            }

                            ?>
                        </div>
                    </div>
                    <div class="disability">
                        <div><label>If you have any medical problem please spesify:</label></div>
                        <div><textarea name="other" id="other" cols="45" rows="5"></textarea></div>
                    </div>
                    <div class="signup-button">
                        <div><button type="submit" name="submit">Submit</button></div>
                        </div>
                </form>
            </div>

        </div>
    </div>
    <script>
        function validateform() {
            let name = document.forms["form_1"]["name"].value;
            let username = document.forms["form_1"]["username"].value;
            let phone = document.forms["form_1"]["phone"].value;
            let mail = document.forms["form_1"]["mail"].value;
            let password = document.forms["form_1"]["password"].value;
            let repassword = document.forms["form_1"]["repassword"].value;
            let dob = document.forms["form_1"]["dob"].value;
            let ge = document.forms["form_1"]["ge"].value;

        if(name==""){
            alert("Name cannot be blank");
            return false;

        }
        if(username==""){
            alert("Username cannot be blank");
            return false;

        }
        if(phone==""){
            alert("Mobilenumber cannot be blank");
            return false;
        }
        if(phone.toString().length!=10){
            alert("Mobilenumber should be of 10 digit");
            return false;

        }
        if(mail==""){
            alert("Please Enter your E-mail");
            return false;
        }
        if(password==""){
            alert("password cannot be blank");
            return false;
        }
        if(repassword==""){
            alert("Re-enter your password as above");
            return false;
        }
        if(password!=repassword){
            alert("Re-enter password is should be same as above ");
            return false;
        }
        if(dob==""){
            alert("DOB cannot be blank");
            return false;
        }
        if(ge==""){
            alert("Please select your gender");
            return false;
        }
    }

    </script>

</body>

</html>