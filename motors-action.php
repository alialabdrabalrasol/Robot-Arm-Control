<?php

$url = "localhost";
$username = "root";
$password = "";
$db = "robot_database";

$conn=mysqli_connect($url,$username,$password,$db);
    if(!$conn){
        die('Could not Connect');
	}

    if(isset($_POST['save'])){
        $motor1=$_POST['motor1'];
        $motor2=$_POST['motor2'];
        $motor3=$_POST['motor3'];
        $motor4=$_POST['motor4'];
        $motor5=$_POST['motor5'];
        $motor6=$_POST['motor6'];
        $sql = "SELECT * FROM `arm-control`";
        $result = mysqli_query($conn, $sql);

        if(isset($_POST['switch'])){
            $state=$_POST['switch'];
            if (mysqli_num_rows($result) > 0) {
                //update here
                while($row = mysqli_fetch_assoc($result)) {
                  $ID=$row['ID'];
                 
                  $sql="UPDATE `arm-control` SET `Motor1` = '$motor1',`Motor2` = '$motor2',`Motor3` = '$motor3',`Motor4` = '$motor4',`Motor5` = '$motor5',`Motor6` = '$motor6',`State` = 1 WHERE ID = '$ID';";   
                  if(mysqli_query($conn,$sql)){
                    echo 'Successfully Done';
                }else{
                    echo 'error: '.mysqli_error($conn);
                }
                }
              } else {
                  //insert here
                  $sql="INSERT INTO `arm-control` (`ID`, `Motor1`, `Motor2`, `Motor3`, `Motor4`,`Motor5`,`Motor6`,`State`) VALUES (NULL, '$motor1', '$motor2', '$motor3', '$motor4','$motor5', '$motor6',1)";
                  if(mysqli_query($conn,$sql)){
                    echo 'Successfully Done';
                }else{
                    echo 'error: '.mysqli_error($conn);
                }
                
              }
            
           
             
        }else{
           
            if (mysqli_num_rows($result) > 0) {
                //update here
                while($row = mysqli_fetch_assoc($result)) {
                    $ID=$row['ID'];
                  
                    $sql="UPDATE `arm-control` SET `Motor1` = '$motor1',`Motor2` = '$motor2',`Motor3` = '$motor3',`Motor4` = '$motor4',`Motor5` = '$motor5',`Motor6` = '$motor6',`State` = 0 WHERE ID = '$ID';"; 
                    if(mysqli_query($conn,$sql)){
                        echo 'Successfully Done';
                    }else{
                        echo 'error: '.mysqli_error($conn);
                    }
                }
              } else {
                  //insert here
                  $sql="INSERT INTO `arm-control` (`ID`, `Motor1`, `Motor2`, `Motor3`, `Motor4`,`Motor5`,`Motor6`,`State`) VALUES (NULL, '$motor1', '$motor2', '$motor3', '$motor4','$motor5','$motor6',0)";
                
                  if(mysqli_query($conn,$sql)){
                    echo 'Successfully Done';
                }else{
                    echo 'error: '.mysqli_error($conn);
                }
                
              }
        }
    }
    



?>