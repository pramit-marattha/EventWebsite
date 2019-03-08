<?php
session_start();
$databaseName = 'pramitma_c7190063';
$hostname = 'localhost'; 
$username = 'root'; 
$password = ''; 
$connection=mysqli_connect($hostname, $username, $password, $databaseName);
if($connection)
	{
	echo "success";
	}
else
	{echo "Unable to connect to database!";}
?>