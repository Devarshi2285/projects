<?php
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
      
        if(($_POST['item'][$i]=="" &&  $_POST['time'][$i]=="") && $_POST['qu'][$i]==""){
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
        VALUES ('" . $username . "','" . $date . "','" . $it[0] . "','" . $ti[0] . "','" . $qu[0] . "','" . $it[1] . "','" . $ti[1] . "','" . $qu[1] . "','" . $it[2] . "','" . $ti[2] . "','" . $qu[2] . "','" . $it[3] . "','" . $ti[3] . "','" . $qu[3] . "','" . $it[4] . "','" . $ti[4] . "','" . $qu[4] . "','" . $it[5] . "','" . $ti[5] . "','" . $qu[5] . "','" . $it[6] . "','" . $ti[6] . "','" . $qu[6] . "','" . $it[7] . "','" . $ti[7] . "','" . $qu[7] . "','" . $it[8] . "','" . $ti[8] . "','" . $qu[8] . "','" . $it[9] . "','" . $ti[9] . "','" . $qu[9] . "','" . $it[10] . "','" . $ti[10] . "','" . $qu[10] . "','" . $it[11] . "','" . $ti[11] . "','" . $qu[12] . "','" . $it[13] . "','" . $ti[13] . "','" . $qu[13] . "','" . $it[14] . "','" . $ti[14] . "','" . $qu[14] . "')";
        
        try {
            $connection->query($sql_2);
            } catch (\Exception $e) {
            print_r($exception);
            }
        }