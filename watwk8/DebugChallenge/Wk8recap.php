<?php
include "../../css/backbtn.php";
?>

<?php error_reporting(E_ALL);?>
<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href=""/>
		<title>Result</title>
	</head>
	<body>
		<h1>Insert a record</h1>
		<form method="POST" action="Wk8insert.php">
			
			<input type="text" name="txtName" />
			<br />
			<input type="text" name="txtCategory" />
			<br />
			<input type="submit" value="Submit" name="subEvent" />
		</form>
		<?php
		
		
		include 'Wk8select.php';
		
		?>
	</body>
</html>
