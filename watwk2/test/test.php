

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>My web document</title>
		<link href="test.css" rel="stylesheet" type="text/css" />
	</head>
	<script>
function goBack() {
    window.history.back()
}
</script>
	<body>
		<section id="container">
			   <button onclick="goBack()"class="Go_back">&laquo;GO Back!!</button>
			<p>
				Below is a PHP generated message:-
			</p>
			<?php
			include "message.php";
			?>
		</section>
	</body>
</html>