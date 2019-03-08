<?php
if(!session_id()) session_start();
$databaseName = 'pramitma_c7190063';
$hostname = 'localhost'; 
$username = 'root'; 
$password = ''; 
$conn=mysqli_connect($hostname, $username, $password, $databaseName);
if($conn)
	{
	echo "success";
	}
else
	{echo "Unable to connect to database!";}
?>