<!DOCTYPE html>
<html>
<head>
<title>week 6 Progress Check</title>
</head>
<body>
<script>
function goBack() {
    window.history.back()
}
</script>
<style>
}
q {
    text-decoration: green;
    display: inline-block;
    padding: 8px 16px;
}
q:hover {
    background-color: #ddd;
    color: black;
}
.Go_back {
    background-color: #fff609;
    color: #0909b8;
    border-radius: 0%;
}
</style>

<button onclick="goBack()"class="Go_back">&laquo;GO Back!!</button>
<br>
<br>
<br>
	<h1>Wat week 6 Progress check</h1>
	<form method="POST" action="watwk6progresscheck.php">
		<fieldset>
		<legend>Watwk6</legend>
		<p><label>Location:</label></p>
		<input type="text" name="location" value="<?php
if(isset($_POST['location'])){
echo $_POST['location']; 
}?>" />
		<p><label>Category:</label></p>
		<select name="dropdown">
			<option value="Please select category!!" >Please select category</option>
			<option value="Hotel">Hotel</option>
			<option value="Guest House">Guest House</option>
			<option value="Rental">Rental</option>
		</select>
		<br>
		<br>
<form action="#" onsubmit="if(document.getElementById('agree').checked)
 { 
 	return true;
 	 } 
 	 else { 
 	 	alert('Check to confirm that all category has been selected');
  return false; 
}">
    <input type="checkbox" required name="checkbox" value="check" id="agree" /> Check to confirm that all category has been selected</input>
    <br><br>
    <button type="submit" value="submit" name="submit">Submit</button>
    <br>
    <br>
</form>
</fieldset>
	</form>
	<?php
if(isset($_POST['submit'])){

	if(isset($_POST['dropdown'])){
	$dropdown=$_POST['dropdown'];
}
	if(isset($dropdown)){
}
if(isset($_POST['location'])){
$location=$_POST['location'];
}
if (empty ($location)){
	echo"please enter a location!!!   <br>";
}
$locationSanitize = filter_var($location, FILTER_SANITIZE_STRING);

echo "<html><h2> $locationSanitize , $dropdown </h2></html> ";

}

	?>
</body>
</html>
