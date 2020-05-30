<?php
 include("assets\connect.php");
 $val = $_POST["val"];
 $subject="Notification-";
 $comment="Test Message";
 $year=0;
 for($x=1;$x<=$val;$x++){
      	 $sql = "
      	 INSERT INTO comments(comment_subject, comment_text,year)
         VALUES ('$subject.$x', '$comment','$year')
      	 ";
         mysqli_query($con,$sql);
         
       }
$sql = "
         INSERT INTO comments(comment_subject, comment_text,year)
         VALUES ('Last Notification', '$comment','$year')
         ";
 if (mysqli_query($con,$sql)) {           
            $output = json_encode(array('type' => 'message', 'text' => 'success'));
          die($output);
        }
        else {
             $output = json_encode(array('type' => 'message', 'text' => $sql));
              die($output);
            }
?>