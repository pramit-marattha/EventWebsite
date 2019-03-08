<!doctype html>
<html>
<head>
<title>Dashboard</title>
	<meta charset="utf-8"/>
	<meta name="author" content="name" />
</head>
<body>
	<h1>Edit And Delete User</h1>
	<?php
include_once('../connection.php');
$sql="SELECT * FROM l5secc";
$qry=mysqli_query($conn, $sql);
echo "<table border=1 style='width:100%;'>";
echo "<tr>";
echo "<td>User Id</td><td>First Name</td><td>Last Name</td><td>User Name</td><td>Email</td><td>Age</td><td>Password</td><td>Edit</td><td>Delete</td></tr>";
while($row=mysqli_fetch_array($qry))
{
	$id=$row['Id'];
	$firstname = $row['FirstName'];
	$lastname = $row['LastName'];
	$username = $row['UserName'];
	$email = $row['Email'];
	$age = $row['Age'];
	$password = $row['Password'];
echo "<tr><td>$id</td><td>$firstname</td><td>$lastname</td><td>$username</td><td>$email</td><td>$age</td><td>$password</td><td>
<a href='edituser.php?id=$id'>Edit</a>
</td><td>
<a href='deleteuser.php?id=$id'>Delete</a></td></tr>";
}
echo "</table>";
	?>
</body>
</html>

