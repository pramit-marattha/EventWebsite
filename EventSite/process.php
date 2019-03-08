<?php
if(isset($_POST['signup']))
{
include('connection.php');
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$pass=md5($_POST['pwd']);
$email=$_POST['email'];
$age = $_POST['age'];
$user = $_POST['uname'];
$type = $_POST['type'];
$sqlch="SELECT * from login3 WHERE username='$user' and email='$email'";
$qrych=mysqli_query($conn, $sqlch);
$countch=mysqli_num_rows($qrych);
if($countch<=0)
{
$sql="INSERT INTO login3 (FirstName, LastName, UserName, Email, Age, Password, Type) VALUES ('$firstname', '$lastname', '$user', '$email', '$age', '$pass','$type')";
//$stmt="INSERT INTO login3 (`id`, `username`, `password`, `email`, `role`, `profilepic`, `status`) VALUES ('', '$username', '$password', '$email', $role, $profilepic, $status)";
$qry=mysqli_query($conn, $sql);
if($qry)
	{
	header('Location: login.php');
	}
	else
	{
		echo "Data Not Inserted.<a href='signup.php'>Try Again</a>";
	}
}
else
{
	echo "User or Email Already Exist";
}
}
else
{
	header('Location: signup.php');
}
?>
  