<?php
        include('includes\connection.php');
    if(isset($_POST['submit'])){
        $userid=$_POST['userid'];
        $ex_1=$_POST['ex1'];
        $noex_1=$_POST['noofex1'];
        $ex_2=$_POST['ex2'];
        $noex_2=$_POST['noofex2'];

        $sql="INSERT INTO `workout`(`userid`, `ex-1`, `no-ex-1`, `ex-2`, `no-ex-2`)
        VALUES ('" . $userid . "','" . $ex_1 . "','" . $noex_1. "','" . $ex_2 . "','" . $noex_2 . "')";
        $done=$connection->query($sql);
        if($done){
                echo"done";
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
</head>

<body>
        <form action="" method="post">
        <div class="userid">
                <label>userid</label>
                <input type="text" name="userid" id="userid">
        </div>
        <div class="Ex-1">
                <label for="exer">Enter Exersize:</label>
                <select id="exer" name="ex1">
                        <option value="pushup">pushup</option>
                        <option value="plank">palnk</option>
                </select>
        </div>
        <div class="noofex1">
                <input type="text" name="noofex1" id="no-of-ex-1">
        </div>
        <div class="Ex-2">
                <label for="exer">Enter Exersize:</label>
                <select id="exer" name="ex2">
                        <option value="pushup">pushup</option>
                        <option value="plank">palnk</option>
                </select>
        </div>
        <div class="no-of-ex-2">
                <label></label>
                <input type="text" name="noofex2" id="no-of-ex-2">
        </div>
        <div class="button"><div><button type="submit" name="submit">Submit</button></div></div>
        </form>

</body>

</html>