<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/stylesheet.css" type="text/css" />
    <title>Document</title>
  </head>
  <body>
    
    <div>
    <h4>
      <p ><span>Arm:</span></p>
      <?php
      $url = "localhost";
      $username = "root";
      $password = "";
      $db = "robot_database";
      
      $conn=mysqli_connect($url,$username,$password,$db);
          if(!$conn){
              die('Could not Connect');
        }
        $sql = "SELECT * FROM `arm-control`";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
         
          while($row = mysqli_fetch_assoc($result)) {
            $motor1=$row['Motor1'];
            $motor2=$row['Motor2'];
            $motor3=$row['Motor3'];
            $motor4=$row['Motor4'];
            $motor5=$row['Motor5'];
            $motor6=$row['Motor6'];
            $state=null;
            if($row["State"]==0){
              $state="Off";
            }else{
              $state="On";
            }
               echo
                "
            
                <p><span>#1 : $motor1 &#176;</span></p>
                <p><span>#2 : $motor2 &#176;</span></p>
                <p><span>#3 : $motor3 &#176;</span></p>
                <p><span>#4 : $motor4 &#176;</span></p>
                <p><span>#5 : $motor5 &#176;</span></p>
                <p><span>#6 : $motor6 &#176;</span></p>
                <p><span>State : $state </span></p>
                
            
                ";
           
           
           }
        } else {
         
              echo '<h1>No Record Found</h1>';
          
          
        }
      
     
       
  
      ?>
    </h4>
    <h4>
    <p ><span >Base:</span> </p>
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
        if (mysqli_num_rows($result) > 0) {
         
          while($row = mysqli_fetch_assoc($result)) {
            $action=$row['action'];
            

           
               echo
                "
            
                <p><span>Action : $action </span></p>
              
                
            
                ";
           
           
           }
        } else {
         
              echo '<h1>No Record Found</h1>';
          
          
        }
      
     
       
  
      ?>

    </h4>
    </div>
  </body>
</html>
