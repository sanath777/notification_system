<?php 
include 'header.php';
include("assets\connect.php");
    if(isset($_POST['sid'])){
    $sid=$_POST['sid'];
    $email=$_SESSION["username"];
    $sql="SELECT friends FROM student where email='$email'";
     $result = mysqli_query($con,$sql);
     while ($row = $result->fetch_assoc()){  
      $fr=$row['friends'];
     }
     if ($fr==''){
        $fr=$sid;
     }
     else{
         $fr=$fr.':'.$sid;
        }
        $sql = "UPDATE student
      SET friends='$fr'
      WHERE email='$email'";
     if (mysqli_query($con,$sql)) {           
            $output = json_encode(array('type' => 'message', 'text' => 'success'));
          die($output);
        }
        else {
             $output = json_encode(array('type' => 'message', 'text' => $sql));
              die($output);
            }
    }
?>