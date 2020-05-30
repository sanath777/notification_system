<?php
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$encrypt=base64_encode($password);
  include("assets\connect.php");
	$sql="SELECT * FROM student WHERE email='$email' and password='$encrypt'";
	$result = mysqli_query($con,$sql);
	$row = $result->num_rows;
   if ($row=$result->fetch_assoc()){
        $name=$row["name"];
        session_start();
        $_SESSION['username']=$email;
        if ($email=='admin@abc.com'){
          $output = json_encode(array('type' => 'message', 'text' => 'admin'));
          die($output);
        }
        else{
          $output = json_encode(array('type' => 'message', 'text' => $name));
          die($output);
        }
          }
   else {
   	  $output = json_encode(array('type' => 'error', 'text' => 'username or password doesnt match'));
      die($output);
   }
?>
