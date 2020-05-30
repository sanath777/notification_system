<?php
	include 'assets/connect.php';
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$year=$_POST['year'];
		$password=$_POST['password'];
		$encrypt=base64_encode($password);
		$duplicate=mysqli_query($con,"SELECT * from student where email='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			$output = json_encode(array('type' => 'error', 'text' => 'Email Already Exists'));
      		die($output);
		}
		else{
			$sql1="CREATE TABLE `".$name."`(comment_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, seen INT(1) DEFAULT '0', comment_subject VARCHAR(50), comment_text TEXT, comment_status INT(1) DEFAULT '0')";
			mysqli_query($con, $sql1);
			$sql = "INSERT INTO `student`( `name`, `email`, `phone`, `city`, `password`,`year`) 
			VALUES ('$name','$email','$phone','$city', '$encrypt','$year')";
			if (mysqli_query($con, $sql)) {
			$output = json_encode(array('type' => 'message', 'text' => 'successful'));
  			die($output);
			} 
			else {
			$output = json_encode(array('type' => 'error', 'text' => 'Check Your connection'));
 			 die($output);
			}
		}
		mysqli_close($conn);
?>
  