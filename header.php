<?php
include("assets\connect.php");
		session_start();
		if(!isset($_SESSION["username"])){
			echo "<script>
			window.location='login.html';
			</script>";
		}
		else {
			$sql="SELECT * FROM student WHERE email='".$_SESSION['username']."'";
			$result=$con->query($sql);
			$row=$result->fetch_assoc();
			$_SESSION["name"]=$row["name"];
			$_SESSION["year"]=$row["year"];
			$_SESSION["phone"]=$row["phone"];
			$_SESSION["city"]=$row["city"];
		}
?>