<?php
  include('header.php');
  include('run_check.php');
  include('course_date.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
 <style>
  .dropdown {
    display:inline-block;
    margin-left:20px;
    padding:10px;
  }


.glyphicon-bell {
   
    font-size:1.5rem;
  }

.notifications {
   min-width:420px; 
  }
  
  .notifications-wrapper {
     overflow:auto;
      max-height:250px;
    }
    
 .menu-title {
     color:#ff7788;
     font-size:1.5rem;
      display:inline-block;
      }
 
.glyphicon-circle-arrow-right {
      margin-left:10px;     
   }
  
   
 .notification-heading, .notification-footer  {
  padding:2px 10px;
       }
      
        
.dropdown-menu.divider {
  margin:5px 0;          
  }

.item-title {
  
 font-size:1.3rem;
 color:#000;
    
}

.notifications a.content {
 text-decoration:none;
 background:#ccc;

 }
    
.notification-item {
 padding:10px;
 margin:5px;
 background:#ccc;
 border-radius:4px;
 }

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .row.content {height: 670px}
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
        .search-box{
        border: 2px solid grey;
        border-radius:5px;
    }
    .search-box::placeholder{
        text-align: center;
    }
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="images/student.png" style="width: 50px;height: 50px">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><b><?php echo $_SESSION["name"];?></b></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span>
            <i class="glyphicon glyphicon-bell"></i>
          </a>
          <ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel">
            <div class="notification-heading"><h4 class="menu-title">Notifications</h4>
            <li class="divider"></li>
            <div class="notifications-wrapper">
            </div>
          </ul>
      </div>
      <a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <br>
      <p><a href="#"onclick="func1();"><i class="fa fa-fw fa-home"></i> Home</a></p>
  <p><a href="#"onclick="func2();"><i class="fa fa-fw fa-user"></i> Add Friends</a></p>
  <p><a href="#"onclick="func3();"><i class="fa fa-fw fa-calendar-o"></i>Courses</a></p>
  <p><a href="#"onclick="func4();"><i class="fa fa-fw fa-envelope"></i>Message</a></p>
    </div>
     <div id="container1">
  <div class="col-sm-8 text-left">
      <h2><b>Student Details</b></h2><br>
    <label><b>Name</b></label>
    <input type="text" class="form-control" placeholder="<?php echo$_SESSION['name'];?>" disabled/><br>
    <label><b>E-mail</b></label>
    <input type="text"  class="form-control"placeholder="<?php echo$_SESSION['username'];?>"disabled/><br>
    <label><b>City</b></label>
    <input type="text" class="form-control" placeholder="<?php echo$_SESSION['city'];?>"disabled/><br>
    <label><b>Phone</b></label>
    <input type="text" class="form-control" placeholder="<?php echo$_SESSION['phone'];?>"disabled/><br>
    <label><b>Batch</b></label>
    <input type="text" class="form-control" placeholder="Year-<?php echo$_SESSION['year'];?>"disabled/><br>
      </div>
    </div> 
    <div id="container2" style="display: none;">
  <div class="col-sm-8 text-left"> 
     <br>
    <h2><b>Search Friend ID and Add Friend</b></h2>
    <br>
    <center>
         <div class="search-wrapper" style="display: inline;">
            <input type="text" placeholder="Type to search" id="search" onkeyup="find()">
            <button class="search-icon"><span>search</span></button>
            &nbsp;&nbsp;
            <input type="text"  placeholder="Enter Student ID" id="sid">
            <button class="search-icon" onclick="addfriend();"><span>Add Friend</span></button>
            </div>
            </center>
            <br>
          <span id="rack"></span>
          <hr>
    </div>
  </div>      
    <div id="container3" style="display: none;">
    <div class="col-sm-8 text-left"> 
      <br><h2><b>Current Courses</b></h2>
      <table id='customers'> 
    <tr><th>Course Name</th><th>Course Start Date</th></tr>

    <?php 
      $y=$_SESSION['year'];
     $sql="SELECT * FROM course where course_year='$y'";
     $result = mysqli_query($con,$sql);
     if (!$result->num_rows==0) {           
            while ($row = $result->fetch_assoc()){       
                  echo "<tr><td>".$row['course_name']."</td><td>";
                   echo $row['course_date']."</td></tr>"; 
                  // echo json_encode(array('name'=>$row['name']));
            }
        }
        else {
              # code...
             echo "<tr><td id='rack' colspan='4' style='text-align:center;'>No result found</td></tr>";
            }
        ?>
</table>
    </div>
  </div>
    <div id="container4" style="display: none;">
    <div class="col-sm-8 text-left"> 
      <br>
      <h2><b>Send Notifications To All</b></h2>
      <form method="post" id="comment_form">
    <div class="form-group">
     <label>Enter Subject</label>
     <input type="text" name="subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
     <label>Enter Comment</label>
     <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
    </div>
    </form>
    </div>
  </div> 
  </div>
  </div>
</body>
</html>
<script>
function seen(d){
  var datastring='cid='+d;
  $.ajax({
        url:"notify_data.php",
            type: "POST",
            dataType:"json",
            encode:true,
            data:datastring, 
            cache: false,
            success: function(data)
            { 
              var cid=data.text;
              document.getElementById("1304").style.display="true";
            }

     });
}


      function find(){
        var search=$("#search").val();
        var datastring='search='+search;
       $.ajax({
        url:"search1.php",
            type: "POST",
            datatype:"html",
            data:datastring, 
            cache: false,
            success: function(data)
            { 
               document.getElementById("rack").innerHTML=data;
                },
            error: function(requestObject, error, errorThrown) 
            {
                alert(error);
                document.getElementById("rack").innerHTML="*please check your connection and try again";
            }           
     });
}
  function func1(){
    document.getElementById('container1').style.display="block";
    document.getElementById('container2').style.display="none";
    document.getElementById('container4').style.display="none";
    document.getElementById('container3').style.display="none";
  }
   function func2(){
    document.getElementById('container1').style.display="none";
    document.getElementById('container3').style.display="none";
    document.getElementById('container4').style.display="none";
    document.getElementById('container2').style.display="block";
  }
  function func3(){
    document.getElementById('container1').style.display="none";
    document.getElementById('container4').style.display="none";
    document.getElementById('container2').style.display="none";
    document.getElementById('container3').style.display="block";
  }
  function func4(){
    document.getElementById('container1').style.display="none";
    document.getElementById('container3').style.display="none";
    document.getElementById('container2').style.display="none";
    document.getElementById('container4').style.display="block";
  }
  function addfriend(){
       var sid=$("#sid").val();
        var datastring='sid='+sid;
       $.ajax({
        url:"frequest.php",
            type: "POST",
            dataType:"json",
            encode:true,
            data:datastring, 
            cache: false,
            success: function(data)
            { 
              if (data.text=='success'){
                  document.getElementById("rack").innerHTML="Added Friend";
              }
              else{
               document.getElementById("rack").innerHTML=data.text;
             }
                },
            error: function(requestObject, error, errorThrown) 
            {
                alert(error);
                document.getElementById("rack").innerHTML="*please check your connection and try again";
            }           
     });
  }
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"assets/fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.notifications-wrapper').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"assets/insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
