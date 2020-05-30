<?php 
include("assets\connect.php");
$subject="Your Course Starts Today";
$comment="check your course for info";
$y=$_SESSION["year"];
     $sql="SELECT * FROM course where course_year='$y'";
     $result = mysqli_query($con,$sql);       
      while ($row = $result->fetch_assoc()){
            if ($row['course_date']==date("Y-m-d")){
            	$query="INSERT INTO ".$_SESSION['name']."(comment_subject, comment_text)VALUES ('$subject', '$comment')";
 					mysqli_query($con, $query);
            }  
           }
            
            