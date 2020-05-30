<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
function sendResponse($resp_code,$data,$message){
    echo json_encode(array('code'=>$resp_code,'message'=>$message,'data'=>$data));
}
$conn=new mysqli("localhost","root","","project");
if($conn==null){
    sendResponse(500,$conn,'Server Connection Error');
}else{
    $sql = "SELECT name FROM student";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $users=array();
        while($row = $result->fetch_assoc()) {
            $user=array(
                "name" => $row["name"],
            );
            array_push($users,$user);
        }
        sendResponse(200,$users,'User List');
    } else {
        sendResponse(404,[],'User not available');
    }
    $conn->close();
}
?>