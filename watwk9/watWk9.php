<?php 
	include('init.php');


if (isset($_SESSION['user']))
{
	echo ("Welcome to the Login system");
}
else
{
	header('location:loginform.php');
} 
	?>
	<html>
<head>
</head>
<body>
	<br/><a href = 'protected.php'> Protected Page </a> <br/>
		<a href = 'logout.php'> Logout </a></form>
</body>
</html>
