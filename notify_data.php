<?php
include ("header.php");
 include("assets\connect.php");
 $name=$_SESSION['name'];
 $val = $_POST["cid"];
$sql= "UPDATE ".$name." SET seen = 1 WHERE comment_id='$val'";
 if (mysqli_query($con,$sql)) {           
            $output = json_encode(array('type' => 'message', 'text' => $val));
          die($output);
        }
        else {
             $output = json_encode(array('type' => 'message', 'text' => $sql));
              die($output);
            }
?>