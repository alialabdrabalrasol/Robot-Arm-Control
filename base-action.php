<?php

$url = "localhost";
$username = "root";
$password = "";
$db = "robot_database";

$conn=mysqli_connect($url,$username,$password,$db);
    if(!$conn){
        die('Could not Connect');
	}
    $sql = "SELECT * FROM `base-control`";
    $result = mysqli_query($conn, $sql);  
    
    if(isset($_POST['up'])){
        $action="u";
        if (mysqli_num_rows($result) > 0) {
            //update here
            while($row = mysqli_fetch_assoc($result)) {
              $ID=$row['ID'];
             
              $sql="UPDATE `base-control` SET `action` = '$action' WHERE ID = '$ID';";   
              if(mysqli_query($conn,$sql)){
                header('Location:information.php');
            }else{
                echo 'error: '.mysqli_error($conn);
            }
            }
          } else {
              //insert here
              $sql="INSERT INTO `base-control` (`ID`, `action`) VALUES (NULL, '$action')";
              if(mysqli_query($conn,$sql)){
                header('Location:information.php');
            }else{
                echo 'error: '.mysqli_error($conn);
            }
            
          }
        
        
    }
    if(isset($_POST['down'])){
        $action="d";
        if (mysqli_num_rows($result) > 0) {
            //update here
            while($row = mysqli_fetch_assoc($result)) {
              $ID=$row['ID'];
             
              $sql="UPDATE `base-control` SET `action` = '$action' WHERE ID = '$ID';";   
              if(mysqli_query($conn,$sql)){
                header('Location:information.php');
            }else{
                echo 'error: '.mysqli_error($conn);
            }
            }
          } else {
              //insert here
              $sql="INSERT INTO `base-control` (`ID`, `action`) VALUES (NULL, '$action')";
              if(mysqli_query($conn,$sql)){
                header('Location:information.php');
            }else{
                echo 'error: '.mysqli_error($conn);
            }
            
          }
    }
    if(isset($_POST['left'])){
        $action="l";
        if (mysqli_num_rows($result) > 0) {
            //update here
            while($row = mysqli_fetch_assoc($result)) {
              $ID=$row['ID'];
             
              $sql="UPDATE `base-control` SET `action` = '$action' WHERE ID = '$ID';";   
              if(mysqli_query($conn,$sql)){
                header('Location:information.php');
            }else{
                echo 'error: '.mysqli_error($conn);
            }
            }
          } else {
              //insert here
              $sql="INSERT INTO `base-control` (`ID`, `action`) VALUES (NULL, '$action')";
              if(mysqli_query($conn,$sql)){
                header('Location:information.php');
            }else{
                echo 'error: '.mysqli_error($conn);
            }
            
          }
    }
    if(isset($_POST['right'])){
        $action="r";
        if (mysqli_num_rows($result) > 0) {
            //update here
            while($row = mysqli_fetch_assoc($result)) {
              $ID=$row['ID'];
             
              $sql="UPDATE `base-control` SET `action` = '$action' WHERE ID = '$ID';";   
              if(mysqli_query($conn,$sql)){
                header('Location:information.php');
            }else{
                echo 'error: '.mysqli_error($conn);
            }
            }
          } else {
              //insert here
              $sql="INSERT INTO `base-control` (`ID`, `action`) VALUES (NULL, '$action')";
              if(mysqli_query($conn,$sql)){
                header('Location:information.php');
            }else{
                echo 'error: '.mysqli_error($conn);
            }
            
          }
    }
    if(isset($_POST['stop'])){
        $action="s";
        if (mysqli_num_rows($result) > 0) {
            //update here
            while($row = mysqli_fetch_assoc($result)) {
              $ID=$row['ID'];
             
              $sql="UPDATE `base-control` SET `action` = '$action' WHERE ID = '$ID';";   
              if(mysqli_query($conn,$sql)){
                header('Location:information.php');
            }else{
                echo 'error: '.mysqli_error($conn);
            }
            }
          } else {
              //insert here
              $sql="INSERT INTO `base-control` (`ID`, `action`) VALUES (NULL, '$action')";
              if(mysqli_query($conn,$sql)){
                header('Location:information.php');
            }else{
                echo 'error: '.mysqli_error($conn);
            }
            
          }
    }

   
    



?>