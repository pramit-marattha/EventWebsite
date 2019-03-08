<?php
 error_reporting(E_ALL);
include 'connection.php';
if (isset($_POST['subEvent'])){
	$name=$_POST['txtName'];
	$pass=$_POST['txtCategory'];
			
	$query="INSERT INTO events 
	('eventName', 'eventCategory')
	VALUES
	('$name','$pass')";
	
	mysqli_query($connection, $query);
	
	header('location:Wk8recap.php');
	
}
?>
