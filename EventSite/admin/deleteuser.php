
<?php include "../database.php"?>

<?php/*
// Before using $_POST['value'] 
if (isset($_GET['user_id'])) 
{ 
// Instructions if $_POST['value'] exist 
	$user_id=$_GET['user_id'];

}

if(!empty($user_id))
{
$sql="DELETE * FROM user_info where user_id=$user_id";
$qry=mysqli_query($conn, $sql);
if($qry)
{
	header('Location: usertable.php');
}
}
else
	header('Location: usertable.php');
*/


?>
<?php
          if(isset($_GET['delete'])){
              $user_id=$_GET['delete'];
              $query_d ="delete from user_info where user_id={$user_id}";
              $delete_query=mysqli_query($conn,$query_d);     
     header('Location: usertable.php');
          }
?>