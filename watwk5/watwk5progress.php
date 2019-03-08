<!DOCTYPE html>
<html>
	<head><title>WAT Week 5 Progress Check</title></head>
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
		<h1>WAT Week 5 Progress Check</h1>
		<h1>Generate Statements</h1>


			<?php
			 //My first PHP 
 echo "Student_name= Pramit marattha </br> Student_ID=77190063   <br>"; 
?>


<?php
//Extension Excersice
 echo '"It\'s not more than £3" </br>'
?>
		<h1>Use Arithmetic Operators </h1>
		<?php

     $loan= 500;
     $interest_rate = 3.5;
     $interest_paid= ($loan/100)*$interest_rate;

     echo "Loan: $loan   <br>";
     echo "Rate:$interest_rate    <br>";
     echo "Payable: £$interest_paid   <br>";
		?>

		<h1>Use Conditional Statements</h1>
		<?php
	
$password = "pass";
$user ="user01";

if ($user =="user01" && $password="passwd") {
   
    echo "Fail    <br>";
}
 
 	else{
	echo "Success    <br>";
}
?>

		<?php
$password = "pass";
$user ="user01";
		$password = "passwd";
if (strlen($password) <= 6) {
    echo "Password length is valid   <br>";
}
   else{
 	echo "Please use at least 6 characters    <br>";
}
		?>
	</body>
</html>
