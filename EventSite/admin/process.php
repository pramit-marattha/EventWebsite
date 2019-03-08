<?php

if(isset($_POST['submit']))
{
	$username=$_POST['uname'];
	$password=md5($_POST['pwd']);

	include_once('../connection.php');
	$sql="SELECT * from login3 WHERE UserName='$username' AND Password='$password'";
	$qry=mysqli_query($conn, $sql);
	$count=mysqli_num_rows($qry);
	if($count==1)
	{
		session_start();
		$_SESSION['admin']='$username';
		echo "Login Success";
		header('Location: admin.php');
	}
	else
	{
		echo "Login Failed";
	}


}


/*
if(isset($_POST['submit']))
{
	$username=$_POST['uname'];
	$password=md5($_POST['pwd']);

	include_once('../connection.php');
	$sql="SELECT * from login WHERE UserName='$username' AND Password='$password'";
	$qry=mysqli_query($conn, $sql);
	$count=mysqli_num_rows($qry);
	if($count==1)
	{
		session_start();
		$_SESSION['name']='$username';
		echo "Login Success";
		header('Location: admin.php');
	}
	else
	{
		echo "Login Failed";
	}


}
*/
?>





