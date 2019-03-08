<?php
include "../css/backbtn.php";
?>



<html>
<head>
</head>
<body>
<h3>Login</h3>
<form method="POST" action="login.php" name="form" enctype="multipart/form-data">
	<input type="text" name="txtUser" />
	<input type="password" name="txtPass" />
	<input type="submit" name="subLogin" value="submit" />
</form>

<br/><a href = 'protected.php'> Protected Page </a> <br/>
		<a href = 'logout.php'> Logout </a></form>
</body>
</html>

