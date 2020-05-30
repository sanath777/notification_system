<?php
  include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>

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
      <img src="images/admin.png" style="width: 55px;height: 50px">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="dropdown">
          <a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
      </div>
      
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <br>
      <p><a href="#"onclick="func2();"><i class="fa fa-fw fa-envelope"></i> Comment</a></p>
  <p><a href="#"onclick="func1();"><i class="fa fa-fw fa-user"></i>Enable Course</a></p>
  <p><a href="#" onclick="func3();"><i class="fa fa-fw fa-wrench"></i>Test</a></p>
    </div>
    <div id="container1">
    <div class="col-sm-8 text-left"> 
      <br>
      <h2><b>Sent Notifications Class-wise<b></h2>
      <br>
      <form method="post" id="comment_form">
    <div class="form-group">
     <label>Notification Subject</label>
     &nbsp;&nbsp;
     <select id="group" name="group">
      <option value="0">All</option>
      <option value="1">1st Year</option>
      <option value="2">2nd Year</option>
      <option value="3">3rd Year</option>
      <option value="4">4th Year</option>
     </select>
     <input type="text" name="subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
     <label>Enter Description</label>
     <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
    </div>
   </form>
    </div>
    </div> 
    <div id="container2" style="display: none;">
      <div class="col-sm-8 text-left"> 
      <br>
      <h2><b>Enable Course<b></h2>
      <br>
      <form method="post">
    <div class="form-group">
     <label>Course Name</label>
     <input type="text" name="cname" id="cname" class="form-control">
     </div>
     <div class="form-group">
     <label>Year</label>
     &nbsp;&nbsp;
     <select id="cyear" name="cyear">
      <option value="0">All</option>
      <option value="1">1st Year</option>
      <option value="2">2nd Year</option>
      <option value="3">3rd Year</option>
      <option value="4">4th Year</option>
     </select>
    </div>
    <div class="form-group">
     <label>Course Start Date</label>
     <input type="date" name="date" id="date" class="form-control">
   </div>
    <div class="form-group">
     <button class="btn btn-info" onclick="send_data();">submit</button>
    </div>
   </form>
    </div>
      <div class="col-sm-8 text-left"> 
                <br>
              <span id="rack"></span>
              <hr>
      </div>
    </div>
    <div id="container3" style="display: none;">
      <div class="col-sm-8 text-left"> 
      <br>
      <div class="form-group">
        <h2><b>Send n Notifications to Students</b></h2>
        <input type="number" min="1" max="100" name="val" id="val" placeholder="Enter n Value"class="form-control"><br>
     <button class="btn btn-info" onclick="send();">send</button>
    </div>
      </div>
      </div>             
  </div>
</div>

</body>
</html>
<script>
  function func1(){
    document.getElementById('container2').style.display="block";
    document.getElementById('container1').style.display="none";
    document.getElementById('container3').style.display="none";
  }
   function func2(){
    document.getElementById('container2').style.display="none";
    document.getElementById('container3').style.display="none";
    document.getElementById('container1').style.display="block";
  }
  function func3(){
    document.getElementById('container1').style.display="none";
    document.getElementById('container2').style.display="none";
    document.getElementById('container3').style.display="block";
  }
  function send_data(){
       var cname=$("#cname").val();
       var group=$("#cyear").val();
       var date=$("#date").val();
        var datastring='cname='+cname+'&date='+date+'&group='+group;
       $.ajax({
        url:"course.php",
            type: "POST",
            dataType:"json",
            encode:true,
            data:datastring, 
            cache: false,
            success: function(data)
            { 
                  document.getElementById("rack").innerHTML="Course Enabled";
            
                },
            error: function(requestObject, error, errorThrown) 
            {
                alert(error);
                document.getElementById("rack").innerHTML="*please check your connection and try again";
            }           
     });
  }
  function send(){
       var val=$("#val").val();
        var datastring='val='+val;
       $.ajax({
        url:"test.php",
            type: "POST",
            dataType:"json",
            encode:true,
            data:datastring, 
            cache: false,
            success: function(data)
            { 
                  alert("Messages Sent");
            
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
