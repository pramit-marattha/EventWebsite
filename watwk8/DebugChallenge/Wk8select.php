

<?php
include "../../css/backbtn.php";
?>

<?php
 error_reporting(E_ALL);
 include('connection.php');

$query="SELECT * FROM events where eventCategory='workshop'";

$result=mysqli_query($connection, $query);

while($row=mysqli_fetch_array($result))
{
	echo $row['eventName'].' '.$row['eventCategory'].'<br />';
}
?>
