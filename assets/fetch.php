<?php
include('connect.php');
include('../header.php');

if(isset($_POST['view'])){

// $con = mysqli_connect("localhost", "root", "", "notif");

if($_POST["view"] != '')
{
    $update_query = "UPDATE ".$_SESSION['name']." SET comment_status = 1 WHERE comment_status=0";
    mysqli_query($con, $update_query);
}
$query = "SELECT * FROM ".$_SESSION['name']." ORDER BY comment_id DESC LIMIT 10000";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
  if ($row['seen']=='0'){
   $output .= '
       <a class="content" onclick="seen('.$row["comment_id"].');">
      <div class="notification-item">
        <h4 class="item-title">'.$row["comment_subject"].'</h4>
        <p>'.$row["comment_text"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i id='.$row["comment_id"].' class="fa fa-check" aria-hidden="true" style="display:none"></i></p>
      </div>
    </a>
   ';

 }
 else{
  $output .= '
       <a class="content" onclick="seen('.$row["comment_id"].');">
      <div class="notification-item">
        <h4 class="item-title">'.$row["comment_subject"].'</h4>
        <p>'.$row["comment_text"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i id='.$row["comment_id"].' class="fa fa-check" aria-hidden="true"></i></p>
      </div>
    </a>
   ';
 }
}
}
else{
     $output .= '
     <a class="content" href="#">
      <div class="notification-item">
        <h4 class="item-title">No Notifications</h4>
      </div>
    </a>';
}



$status_query = "SELECT * FROM ".$_SESSION['name']." WHERE comment_status=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}

?>