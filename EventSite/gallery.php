<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/new.css" />
		<link rel="stylesheet" type="text/css" href="css/boot.css" />
			<link rel="stylesheet" type="text/css" href="js/my.js" />
			
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title> NepalMusicFestival</title>
</head>
<body>

<nav class="navbar  navbar-expand-lg navbar-light navbar-fixed-top">
	<a href="any.php"><img alt="image"  src="image/ultra.png" class="mag" >  </a> 	
	<div class="navbar-header d-flex col">
			
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="#" class="nav-link">Tickets</a></li>
					
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Live Sets <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="artist.php" class="dropdown-item">Artist playing</a></li>
					
				</ul>
			</li>
			<li class="nav-item dropdown">
			<li class="nav-item active"><a href="#" class="nav-link">Hotels</a></li>
			<li class="nav-item dropdown">
			<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Media <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="gallery.php" class="dropdown-item">Gallery</a></li>
				
					
				</ul>
			</li>
			<li class="nav-item dropdown">
			<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">More <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="info.php" class="dropdown-item">Info</a></li>
					<li><a href="help.php" class="dropdown-item">Help</a></li>
					<li><a href="contact.php" class="dropdown-item">Contact Us</a></li>
					
				</ul>
			</li>
		</ul>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right ml-auto">			
			<li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="process.php" method="POST">
							<p class="hint-text">Sign in with your social media account</p>
							<div class="form-group social-btn clearfix">
								<a href="#" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
								<a href="#" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
							</div>
							<div class="or-seperator"><b>or</b></div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required="required" name="Username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required="required" name="Password">
							</div>
							<input type="submit" class="btn btn-primary btn-block" name="login">
							<div class="form-footer">
								<a href="#">Forgot Your password?</a>
							</div>
						</form>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="" method="post">
							<p class="hint-text">Fill in this form to create your account!</p>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="firstname" required="required" name="firstname">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="lastname" required="required" name="lastname">
							</div>
							 <div class="form-group">
                    <label for="age">Age</label>
<select  class="form-control" placeholder="Age" required="required" name="Age">
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>
                  </div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required="required" name="Username">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" required="required" name="Email">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required="required" name="Password">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirm Password" required="required" name="Password">
							</div>
							<div class="form-group">
								<label class="checkbox-inline"><input type="checkbox" required="required" name="checked"> I accept the <a href="#">Terms &amp; Conditions</a></label>
							</div>
							<input type="submit" class="btn btn-primary btn-block" name="submit">
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>
</div></nav>

 <div id="content-wrapper">
 	<div class="gallery">
    <h2>Ultra Photos</h2>
          <div class="container-fluid">




        
              <?php
                  include('connection.php');
                echo " <div class='row'>";

$ids=('1,2,3');
  $stmt="SELECT * FROM gallery where id IN ($ids)  ";
  $qry=mysqli_query($conn, $stmt);
  //Counting record
  $count=mysqli_num_rows($qry);
   while($row=mysqli_fetch_array($qry))
    {
    $image=$row['picture'] ;
    
  echo "<a href='admin/gallery/$image' class='fancybox' rel='ligthbox'>";
    
    
    echo"<div class='column'><img  class='crop'  src='admin/gallery/$image' width=50%></div></a>"; 
        
         
               }

              ?>
            </div>
             <div class="container-fluid">
               <?php
                  include('connection.php');
                echo " <div class='row'>";

$ids=('4,5,6');
  $stmt="SELECT * FROM gallery where ID IN ($ids)  ";
  $qry=mysqli_query($conn, $stmt);
  //Counting record
  $count=mysqli_num_rows($qry);
   while($row=mysqli_fetch_array($qry))
    {
    $image=$row['picture'] ;
    
  echo "<a href='admin/gallery/$image' class='fancybox' rel='ligthbox'>";
    
    
    echo"<div class='column'><img  class='crop'  src='admin/gallery/$image' width=50%></div></a>"; 
        
         
               }

              ?>
            </div>
             <div class="container-fluid">
               <?php
                  include('connection.php');
                echo " <div class='row'>";

$ids=('7,8,9');
  $stmt="SELECT * FROM gallery where ID IN ($ids)  ";
  $qry=mysqli_query($conn, $stmt);
  //Counting record
  $count=mysqli_num_rows($qry);
   while($row=mysqli_fetch_array($qry))
    {
    $image=$row['picture'] ;
    
  echo "<a href='admin/gallery/$image' class='fancybox' rel='ligthbox'>";
    
    
    echo"<div class='column'><img  class='crop'  src='admin/gallery/$image' width=50%></div></a>"; 
        
         
               }

              ?>
            </div>
             <div class="container-fluid">
               <?php
                  include('connection.php');
                echo " <div class='row'>";

$ids=('13,11,12');
  $stmt="SELECT * FROM gallery where ID IN ($ids)  ";
  $qry=mysqli_query($conn, $stmt);
  //Counting record
  $count=mysqli_num_rows($qry);
   while($row=mysqli_fetch_array($qry))
    {
    $image=$row['picture'] ;
    
  echo "<a href='admin/gallery/$image' class='fancybox' rel='ligthbox'>";
    
    
    echo"<div class='column'><img  class='crop'  src='admin/gallery/$image' width=50%></div></a>"; 
        
         
               }

              

              ?>
            </div>
             <div class="container-fluid">
               <?php
                  include('connection.php');
                echo " <div class='row'>";

$ids=('14,15,16');
  $stmt="SELECT * FROM gallery where ID IN ($ids)  ";
  $qry=mysqli_query($conn, $stmt);
  //Counting record
  $count=mysqli_num_rows($qry);
   while($row=mysqli_fetch_array($qry))
    {
    $image=$row['picture'] ;
    
  echo "<a href='admin/gallery/$image' class='fancybox' rel='ligthbox'>";
    
    
    echo"<div class='column'><img  class='crop'  src='admin/gallery/$image' width=50%></div></a>"; 
        
         
               }

              

              ?>
            </div>
                 <div class="container-fluid">
               <?php
                  include('connection.php');
                echo " <div class='row'>";

$ids=('17,18,19');
  $stmt="SELECT * FROM gallery where ID IN ($ids)  ";
  $qry=mysqli_query($conn, $stmt);
  //Counting record
  $count=mysqli_num_rows($qry);
   while($row=mysqli_fetch_array($qry))
    {
    $image=$row['picture'] ;
    
  echo "<a href='admin/gallery/$image' class='fancybox' rel='ligthbox'>";
    
    
    echo"<div class='column'><img  class='crop'  src='admin/gallery/$image' width=50%></div></a>"; 
        
         
               }

              

              ?>
            </div>
                   </div>
            </div>


</body>
</html>



