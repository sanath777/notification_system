<table id='customers'> 
                <tr><th>Student ID</th><th>Student name</th><th>Phone</th><th>Year</th><th>e-mail</th></tr>

<?php 
include 'header.php';
include("assets\connect.php");
    if(isset($_POST['search'])){
    $search=$_POST['search'];
     $sql="SELECT * FROM student where name LIKE '%$search%'";
     $result = mysqli_query($con,$sql);
     if (!$result->num_rows==0) {           
            while ($row = $result->fetch_assoc()){       
                  echo "<tr><td>".$row['student_id']."</td><td>";
                  echo $row['name']."</td><td>";
                   echo $row['phone']."</td><td>";
                   echo $row['year']."</td><td>";
                   echo $row['email']."</td></tr>"; 
                  // echo json_encode(array('name'=>$row['name']));
            }
        }
        else {
              # code...
             echo "<tr><td id='rack' colspan='4' style='text-align:center;'>No result found</td></tr>";
            }
    }
?>
</table>