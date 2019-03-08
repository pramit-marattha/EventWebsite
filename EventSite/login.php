<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../watwk1/watweek1index.html">Week1</a>
                    </li>
                    <li class="active">
                        <a href="../watwk2/watweek2index.html">Week2</a>
                    </li>
                    <li class="active">
                        <a href="../watwk3/watweek3index.html">Week3</a>
                    </li>
                    <li class="active">
                        <a href="../watwk4/watweek4index.html">Week4</a>
                    </li>
                    <li class="active">
                        <a href="../watwk5/watweek5index.html">Week5</a>
                    </li>
                    <li class="active">
                        <a href="../watwk6/watweek6index.html">Week6</a>
                    </li>
                    <li class="active">
                        <a href="../Final_site_assignment/FinalSiteAssignmentindex.html">FinalSite Assignment</a>
                    </li>
                     <li class="active">
                        <a href="../watwk6/Sql/c7190063.sql">Week6-SQL</a>
                    </li>
</nav>
<div class="login-page">
  <div class="form">
  	<form class="login-form" method="POST" action="process2.php">
      <input type="text" name="uname" placeholder="username" value="<?php if(isset($_COOKIE['uname'])) echo $_COOKIE['uname']; ?>" required>

      <input type="password" name="pwd" placeholder="password"value="<?php if(isset($_COOKIE['pwd'])) echo $_COOKIE['pwd']; ?>" required>

<div class="checkbox">
 <input name="remember" id="remember" type="checkbox" 
<?php if(isset($_COOKIE['username'])){echo "checked='checked'"; } ?> value="1">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
      <input type="submit" name="submit" value="Submit">
     
      <p class="message">Did You Sign up ?<a href="signup.php">Sign Up</a></p>
    </form>
  </div>
  </div>
</div>
</body>
<script type="text/javascript">
	$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</html>







<?php
/**

<!--



<form name="loginform" action="login_nextpage.php" method="get">
<input type="text" name="username" placeholder="enter username" 
value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" required>
<input type="password" id="passwordID" name="password" placeholder="enter password" 
value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" required>
 <div class="checkbox">
 <input name="remember" id="remember" type="checkbox" 
<?php if(isset($_COOKIE['username'])){echo "checked='checked'"; } ?> value="1">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
<input type="submit" value="Login">
</form>


-->

?>

<?php
$usernameVal=$_REQUEST["username"];
//$passwordVAl=$_REQUEST["password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userstest_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{

     $escapedPW = mysqli_real_escape_string($conn,$_REQUEST['password']);

     //save this user and pass as cookie if remeber checked start
 if (isset($_REQUEST['remember']))
   $escapedRemember = mysqli_real_escape_string($conn,$_REQUEST['remember']);

 $cookie_time = 60 * 60 * 24 * 30; // 30 days
  $cookie_time_Onset=$cookie_time+ time();
  if (isset($escapedRemember)) {
    
    **/
    /*
    setcookie("username", $usernameVal, $cookie_time_Onset);
    setcookie("password", $escapedPW, $cookie_time_Onset);  

  } else {

      $cookie_time_fromOffset=time() -$cookie_time;
setcookie("username", '',$cookie_time_fromOffset );
    setcookie("password", '', $cookie_time_fromOffset);  

  }
  //save this user and pass as cookie if remember checked end
     
//now check user and pass verification
 $query = "select * from user where username = '$usernameVal';";
 
     $resultSet = mysqli_query($conn,$query);

                           if(@mysqli_num_rows($resultSet) > 0){
                           //check noraml user salt and pass
                           //echo "noraml";
                            
 $saltQuery = "select salt from user where username = '$usernameVal';";
$result = mysqli_query($conn,$saltQuery);
$row = mysqli_fetch_assoc($result);
$salt = $row['salt'];

$saltedPW =  $escapedPW . $salt;

$hashedPW = hash('sha256', $saltedPW);

 $query = "select * from user where username = '$usernameVal' 
and password = '$hashedPW' ";
                        
                            $resultSet = mysqli_query($conn,$query);

                           if(@mysqli_num_rows($resultSet) > 0){
                               $row = mysqli_fetch_assoc($resultSet);
                               echo "your username and  password is corrent";
                               session_start();
                               $_SESSION["user_id"]=$row["user_id"];
                               $_SESSION["user_name"]=$row["username"];
header("location:index.php");
}
else
{
echo "your username or password is incorrect";
}

}
     
}
*/
?>