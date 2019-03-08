<?php

if(isset($_POST['submit']))
{
	$username=$_POST['uname'];
	$password=md5($_POST['pwd']);

	include_once('connection.php');

/*
$sql = mysql_query("SELECT * from login3 WHERE UserName='$username' AND Password='$password'");
    if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysql_fetch_array($sql);

if($qry['type']=="admin"){
            header("location:admin/admin.php");
        }else if($qry['type']=="user"){
            header("location:index.php");
        }

*/


     $escapedPW = mysqli_real_escape_string($conn,$_REQUEST['pwd']);




     // cookie if remeber checked start
 if (isset($_REQUEST['remember']))
   $escapedRemember = mysqli_real_escape_string($conn,$_REQUEST['remember']);

 $cookie_time = 60 * 60 ; 
  $cookie_time_Onset=$cookie_time+ time();
  if (isset($escapedRemember)) {
    
    setcookie("uname", $cookie_time_Onset);
    setcookie("pwd", $escapedPW, $cookie_time_Onset);  

  } else {

      $cookie_time_fromOffset=time() -$cookie_time;
setcookie("uname", '',$cookie_time_fromOffset );
    setcookie("pwd", '', $cookie_time_fromOffset);  

  }

	$sql="SELECT * from login3 WHERE UserName='$username' AND Password='$password'";
	$qry=mysqli_query($conn, $sql);
	$count=mysqli_num_rows($qry);
	if($count==1)
	{
		session_start();
		$_SESSION['name']='$username';
		echo "Login Success";
		header('Location: admin/admin.php');
	}
	else
	{
		echo "Login Failed";
	}

}
?>