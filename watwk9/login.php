<?php
include ('init.php');//establishing the connection

$user = $_POST['txtUser'];//assigning the variable 
$pass = $_POST['txtPass'];


$sql="SELECT * from users WHERE username='$user' AND password='$pass'"; //selecting users table from l5secc database 
	
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
						
if($row=mysqli_fetch_assoc($result))
{

	$_SESSION['user']=$user;
		
	header('Location: watWk9.php'); //if user is recognised 

} else {
$_SESSION['error']= 'User not recognised';//throws error if user is not recognised.
header('Location: watWk9.php');
} 
?>