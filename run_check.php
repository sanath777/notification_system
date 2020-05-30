<?php
$name=$_SESSION['name'];
include("assets\connect.php");
$sql="SELECT
    *
FROM
    `comments`
WHERE NOT EXISTS
    (
    SELECT
        *
    FROM ".$name." WHERE
        ".$name.".comment_id = comments.comment_id
)";
$result = mysqli_query($con,$sql);
   while($row=$result->fetch_assoc()){
    $cid=$row['comment_id'];
    $csb=$row['comment_subject'];
    $ct=$row['comment_text'];
    $cst=$row['comment_status'];
    $query="INSERT INTO `".$name."`(
    comment_id,
    comment_subject,
    comment_text,
    comment_status
)VALUES ('$cid', '$csb', '$ct', '$cst')";
    mysqli_query($con,$query);
    }
    
?>