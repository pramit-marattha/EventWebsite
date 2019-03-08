<?php

if(!session_id()) session_start(); 
if(!isset($_SESSION['admin'])){

 // header('Location: ../finallogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>





  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
 
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
 
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
 
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="admin.php"><li><a href="admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li></a>
  <a href="user.php"><li><a href="user.php"><i class="fa fa-address-book"></i> Add User</a></li></a>
  <a href="usertable.php"><li><a href="usertable.php"><i class="fa fa-address-card-o"></i>Edit and Delete User</a></li></a>
   <a href="add_image.php"><li><a href="add_image.php"><i class="fa fa-file-image-o"></i>Add Image</a></li></a>
      <a href="user.php"><li><a href="delete_image.php"><i class="fa fa-file-image-o"></i>Delete Image</a></li></a>
    <a href="add_event.php"><li><a href="add_event.php"><i class="fa fa-cubes"></i>Add Event</a></li></a>
         <a href="add_event.php"><li><a href="displayevent.php"><i class="fa fa-cubes"></i>Edit/Delete Event</a></li></a>

</div>

<div class="wrapper" id="main">

  <header class="main-header">
 
    <a class="logo">
    
      <span class="logo-mini"></span>
     
      <span class="logo-lg"><b>Dashboard</b></span>
    </a>

 
    <nav class="navbar navbar-static-top">
      

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          
         <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        </ul>
      </div>
    </nav>
  </header>
</div>

      
      <span style="font-size:20px; cursor:pointer; color: blue;" onclick="openNav()">&#9776; Open Menu</span>
 
  








  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>







<?php
include "../database.php";
?>
           <?php
 if(isset($_POST['submit'])){
     $title=$_POST['title'];
   
     $pdate=$_POST['pdate'];
     $content=$_POST['content'];
   
    

    
     $tmpname=$_FILES['img']['tmp_name'];
     $name=$_FILES['img']['name'];
     $size=$_FILES['img']['size'];
     $type=$_FILES['img']['type'];
     if($type=='img/png' or $type=='img/jpg' or $type='img/jpeg' or $type='img/gif'){
         if($size<= 1048576){
             $inst="INSERT INTO `event` (`title`,`date`, `content`, `image`) VALUES ( '$title', '$pdate', '$content', '$name');";
            
             $res=mysqli_query($conn,$inst);
             if($res){
                 $dir="uploads";
                 if(!file_exists($dir) && !is_dir($dir)){
                     mkdir($dir);
                 }
                 $uploadfull ="$dir/$name";
                 $upload = move_uploaded_file($tmpname,$uploadfull);
                 
                 
                 
                 
                 
                echo'
                 Added successfully';
                     }
         }
     }
     
     
     
 }



?>
           <form method="post" action="" name="eventPost" enctype="multipart/form-data">
            <h1>Add Event</h1><hr><br>
	<div class="form-row">
       
	
  <div class="form-group col-md-4">
    <label for="title">Event Title</label>
    <input type="text" class="form-control" id="title"  placeholder="Enter title" name="title">
      </div>
	    <div class="form-group col-md-2">
    <label for="date">Event Date</label>
    <input type="date" class="form-control" name="pdate" id="pdate"  placeholder="Enter event date">
      </div>
    
	  
	  </div>
	  <div class="form-row">
	   
	  
	  
	</div>
	<div class="form-row">
	  <div class="form-group col-md-4">
    <label for="eventimage">Image</label>
    <input type="file" class="form-control-file" id="eventimage" name="img">
  </div>
  

  </div>
 
   
  <div class="form-group">
    <label for="description">Event description</label>
    <textarea class="form-control" id="description" rows="5" name="content"></textarea>
  </div>
  <input type="submit" value="PUBLISH!!" class=" btn btn-primary" name="submit">
</form></div>































































 
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>




































 

<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>

<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="bower_components/fastclick/lib/fastclick.js"></script>

<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/pages/dashboard.js"></script>

<script src="dist/js/demo.js"></script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>
