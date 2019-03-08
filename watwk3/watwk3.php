 <!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP assignment</title>
	</head>
	<script>
function goBack() {
    window.history.back()
}
</script>
<style>
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
	<body>
		<section id="container">
			
 <button onclick="goBack()"class="Go_back">&laquo;GO Back!!</button><br><br><br>
			<?php
			 //My first PHP 
 echo "Student_name= Pramit marattha </br> Student_ID=77190063"; 
?>

<h3>Extension Excersice </h3> 
<?php
//Extension Excersice
 echo '</br>"<b>most programmers say it\'s better to use \'echo\' rather than \'print\' " says who?</b></br>'
?>


<h1>Variables.</h1>
  <?php

$name= "David";
$age = 12;
//

echo "<b>Hi my name is ".$name." and I am ".$age." years old</b></br>";
echo "<b>Mi nombre es {$name} y tengo {$age} anos de edad</b>"
?>


<h1>Functions. </h1>

 <?php
//gettype()returns..
echo gettype($name);
echo '<br />';
//strlen() returns..
echo strlen($name);
echo '<br />';
//strtoUpper()returns..
echo strtoUpper($name);
?>

<h1>Arithmetic. </h1>  
<?php

$num1= 9;
$num2= 12;
$multiply=$num1*$num2;
$percent=($num1/$num2)*100;
$divide=($num1/$num2);
$remainder = $num2 % $num1;
$quotient = ($num2 - $remainder) / $num1;


echo "num1=$num1    <br>";

echo "num2=$num2    <br>";

echo "num1 x num2= $multiply    <br>";

echo "num1 as a percentage of num2 = $percent     <br>";

echo "num2 divided by num1 = $quotient remainder $remainder   <br> ";

//echo number_format("$divide")."<br>";

?>


<br>
<h3>Extension Excersice </h3> 
<?php
//Extension Excersice
$meter= 1.8;
$inches=($meter*100)/2.54;
$feet= $inches/12;
$roundOff=round($feet,2);
$remainder = $inches % 12;
$quotient = ($inches - $remainder) / 12;
$feet_round = round($quotient,0);


echo "Name =$name    <br>"; 

echo "Age=$age        <br>";

echo "Height in Meters =$meter     <br>";

//echo (round($feet,2)."<br>");

echo "Height in Feet and inches = $roundOff    <br>";


echo "num2 divided by num1 = $feet_round feet $remainder inches <br> ";

?>

<h3>Selection. </h3> 

<?php

$day = date('l'); //that is a lower case L
		

date_default_timezone_set('Asia/Kathmandu');
$date = date('m/d/Y h:i:s a', time());
echo 'It\'s '.$day ,$date;

?>


<?php
$day = date("l");

if ($day == "wednesday") {

    echo "<br>  <b> It's a midweek</b> ";
} else {
    echo "<br>  <b> It's not a midweek </b>  <br>";
}

?>


<?php
$t = date("H");

if ($t < "12") {
    echo "<b>Good morning!!!!!</b>     <br>";
} elseif ($t < "18") {
    echo "<b>Good afternoon!!!!!</b>    <br> ";
} else {
    echo "<b>Good night!!!!!!!</b>   <br>";
}
?>


<?php
$password = "password";
if (strlen($password) > 4) {
   
    echo "Password length is valid   <br>";
} elseif (strlen($password) <10) {
	
	echo "password length is invalid     <br>";
} 
?>


<?php
$password = "password";
if ($password =="password") {
   
    echo "Password invalid    <br>";

} elseif ($password =="username") {
	echo "Password invalid     <br>"; 
 
 }	else{
	echo "password valid     <br>";
}

?>

<h3>Extension Excersice. </h3> 


<?php
	//Extension Excercise
	$ticket_price=25;
	$member_age=15;
	$membership='yes';

	if ($member_age<12) 
	{
	$final_price=$ticket_price-((50/100)*$ticket_price);		
	}
	else if ($member_age<18) 
	{
		$final_price=$ticket_price-((25/100)*$ticket_price);		
	}
	else if ($member_age>65) 
	{
		$final_price=$ticket_price-((25/100)*$ticket_price);		
	}

	if($membership!='yes')
	{
		echo "<br/>Initial Ticket Price: £".$ticket_price."<br>";
		echo "Age: ".$member_age."<br>";
		echo "Member: ".$membership."<br>";
		echo "Final Ticket Price: £".number_format($final_price,2)."<br>";
	}
	else
	{
		$final_price=$final_price-((10/100)*$final_price);
		echo "<br/>Initial Ticket Price: £".$ticket_price."<br>";
		echo "Age: ".$member_age."<br>";
		echo "Member: ".$membership."<br>";
		echo "Final Ticket Price: £".number_format($final_price,2)."<br>";

	}

	?>



		</section>
	</body>
</html>







