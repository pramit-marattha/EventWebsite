<?php
include_once('../connection.php');
$id=$_GET['id'];
if(!empty($id))
{
$sql="DELETE FROM login3 WHERE id=$id";
$qry=mysqli_query($conn, $sql);
if($qry)
{
	header('Location: admin.php');
}
}
else
	{echo "Something Wrong";}
?>