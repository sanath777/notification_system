<?php
$name=$_POST['name'];
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
if ($result) {           
            $output = json_encode(array('type' => 'message', 'text' => $result));
          die($output);
        }
        else {
             $output = json_encode(array('type' => 'message', 'text' => $sql));
              die($output);
            }
?>