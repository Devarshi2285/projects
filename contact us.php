<?php
include('includes\connection.php');

if (isset($_POST['submit'])) {
        $name_enter = $_POST['name'];
        $mail= $_POST['mail'];
        $feedback=$_POST['feedback'];
        $sql="INSERT INTO `feedback`(`name`, `email`, `review`)
         VALUES ('" . $name_enter . "','" . $mail . "','" . $feedback . "')";
        $excecute=($connection->query($sql));
       }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/contactus.css">
    <link rel="stylesheet" href="/assets/css/include.css">
    <title>Document</title>
</head>

<body class="bg">
    <div class="container">
        <div class="bound">

            <div class="container-2">
                <div class="done">
                <?php
                   if(isset($excecute)){
                   echo"Thanks for feedback";
                   }
                ?>
                </div>
                <div class="headding">
                    <h2>-:CONTACT US:-</h2>
                </div>
                <form action="" method="post">
                <div><label>Name:</label></div>
                <div><input type="text" name="name"></div>
                <div><label>Valid E-mail:</label></div>
                <div><input type="email" name="mail"></div>
                <div><label>Feedback:</label></div>
                <div><textarea name="feedback" id="" cols="30" rows="3"></textarea></div>
                <div class="button"><div><button type="submit" name="submit">Submit</button></div></div>
                </form>
            </div>
        </div>
        <div class="bound">
            <div class="container-2">
                <div>
                    <div class="location">
                        <div class="contact-img"><img
                                src="assets\images\pin-point-location-icon-isolated-white-background-location-icon-141743215 (1).jpg"
                                alt=""></div>
                        <div>
                            <p>Dharamsinh Desai Univecity,Collage Road,Nadiad</p>
                        </div>
                    </div>
                    <div class="mail">
                    <div class="contact-img"><a><img src="assets\images\email-icon-sign-symbol-logo-vector (1).jpg" alt=""></a></div>
                    <p>yourgym@gmail.com<p>
                </div>
                <div class="call">
                    <div class="contact-img"><a><img src="assets\images\images.jpg" alt=""></a></div>
                    <p>+91 945*****52<p>
                </div>
                </div>
            </div>
        </div>
</body>

</html>