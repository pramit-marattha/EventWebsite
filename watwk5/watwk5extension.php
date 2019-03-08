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
	<h1>watwk5extension</h1>
<form method="POST" action="watwk5extension.php">
	<fieldset>
		<legend>Enter your login details</legend>
		<label for="username">Username: </label>
		<input type="text" name="username" value="username" ="<?php
if(isset($_POST['username'])){
echo $_POST['username']; 
}
?>" />
<label for="mail">Email: </label>
		<input type="text" name="txtmail" value="example@example.com" ="<?php
if(isset($_POST['txtmail'])){
echo $_POST['txtmail']; 
}
?>" />
</fieldset>
<fieldset>
		<legend>Pizza Selection</legend>
		<label for="size">Size: </label>
<input type="radio" name="radio" value="small">small
<input type="radio" name="radio" value="medium">medium
<input type="radio" name="radio" value="Large">large

  <br><br>
  Toppings:
<select name="dowpdown">
	    <option value=" seafood ">seafood </option>
	    <option value=" Pepperoni ">Pepperoni </option>
	    <option value=" Sausage ">sausage </option>
	    <option value=" chicken ">chicken </option>
	  </select>

	 <br> Extras:
    <input type="checkbox" name="chkbox[]" value="Parmesan">Parmesan
    <input type="checkbox" name="chkbox[]" value="Olives">Olives
    <input type="checkbox" name="chkbox[]" value="Capers">Capers
</fieldset>
	<input type="submit" value="Submit" name="Submit"/>
		<input type="reset" value="Clear" /><br>
	
</form>

<h3>Thank You For your order</h3>

<?php


if(isset($_POST['username'])){
    $username = $_POST['username'];
}
if(isset($username)){
echo "Customer ID= $username     <br>" ;
}
if(isset($_POST['txtmail'])){
    $email=$_POST['txtmail'];
}
if(isset($email)){
echo "Email= $email   <br>";
}

if (isset($_POST['submit'])) {
}
if(isset($_POST['radio'])){
	$radio=$_POST['radio'];
}
if(isset($radio)){
echo "Your Order= ".$_POST['radio']  .$_POST['dowpdown'];
}


if (isset($_POST['show_dowpdown_value'])) {
  }
   

if(!empty($_POST['chkbox'])) {
    foreach($_POST['chkbox'] as $check) {
            
 echo "<br>   Extra Toppings=  $check";
}
}

?>

