<?php
if(!session_id()) session_start();
$db='pramitma_c7190063';
$host='localhost';
$user='root';
$pass='';
$conn=mysqli_connect($host, $user, $pass, $db);
if($conn)
	{
	}
else
	{echo "Error";}
?>