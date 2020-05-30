<?php
//insert.php
include('../header.php');
if(isset($_POST["subject"]))
{
 include("connect.php");
 $subject = mysqli_real_escape_string($con, $_POST["subject"]);
 $comment = mysqli_real_escape_string($con, $_POST["comment"]);
 $year =mysqli_real_escape_string($con, $_POST["group"]);
	 $query = "
	 INSERT INTO comments(comment_subject, comment_text,year)
	 VALUES ('$subject', '$comment','$year')
	 ";
 mysqli_query($con, $query);
 $sql= "
	 INSERT INTO ".$_SESSION['name']."(comment_subject, comment_text)
	 VALUES ('$subject', '$comment')
	 ";
 mysqli_query($con, $sql);
}
?>