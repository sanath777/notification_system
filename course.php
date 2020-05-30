<?php
 include("assets\connect.php");
 $cname = $_POST["cname"];
 $cyear = $_POST["cyear"];
 $date =$_POST["date"];
	 $sql = "
	 INSERT INTO course(course_name, course_year,course_date)
	 VALUES ('$cname','$year','$date')
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