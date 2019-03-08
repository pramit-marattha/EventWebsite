<?php
session_start();//session has started 
$databaseName = 'pramitma_c7190063';//coonecting to db 
$hostname = 'localhost'; 
$username = 'root'; 
$password = '';
$connection=mysqli_connect($hostname, $username, $password, $databaseName);
if($connection)
	{
	echo "success";//throws result when connection is successfull
	}
else
	{echo "Unable to connect to database!";}//throws result when connection is not successfull
?>