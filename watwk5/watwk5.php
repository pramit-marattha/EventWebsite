<?php error_reporting(E_ALL);?>
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
<h1>Processing Input from HTML Forms</h1>
<h2>Login Form using GET</h2>
<form method="POST" action="watwk5.php">
<fieldset>
		<legend>LOGIN</legend>
		<label for="email">Email: </label>
		<input type="text" name="txtEmail"/><br />
		<label for="passwd">Password: </label>
		<input type="password" name="txtPass" /><br />
		<input type="submit" value="Submit" name="loginSubmit"  />
		<input type="reset" value="Clear" />
	</fieldset>
</form>

<?php

if(isset($_POST['txtEmail'])){
    $email=$_POST['txtEmail'];
}
if(isset($email)){ 
    echo "Email= $email    <br>" ;
}
if(isset($_POST['txtPass'])){
    $password=$_POST['txtPass'];
}
if(isset($password)){ 
    echo "Password =$password   <br>";
}


//$email=$_GET['txtEmail'] ;
//$password=$_GET['txtPass'];

?>

<?php
if(isset($_POST['loginSubmit'])){
    $loginSubmit=$_POST['loginSubmit'];
}
if(isset($loginSubmit)){


if (empty($email))
{
	echo"please fill up the form   <br>";

}
if (empty($password)){
	echo"please fill up password    <br>";
}
else{
	echo "Submit";
}
}
?>






<form method="POST" action="watwk5.php">
	<fieldset>
		<legend>Comments</legend>
		<label for="mail">Email: </label>
		<input type="text" name="txtmail" value="" ="<?php
if(isset($_POST['txtmail'])){
echo $_POST['txtmail']; 
}
?>" /><br />

		<textarea rows="4" cols="50" name="txtcmt">This is the comment i made</textarea><br />
		<label for="">Click to Confirm: </label>
		<input type="checkbox" name="chkConfirm" value="agree"><br />
		<input type="submit" value="Submit" name="logSub"/>
		<input type="reset" value="Clear" />
	</fieldset>
</form>



<?php

if(isset($_POST['txtmail'])){
    $mail=$_POST['txtmail'];
}
if(isset($mail)){ 
    echo "Email= $mail     <br>" ;
}



if(isset($_POST['txtcmt'])){
    $comment=$_POST['txtcmt'];
}
if(isset($comment)){ 
    echo "Comment =$comment   <br>";
}


if(isset($_POST['chkConfirm'])){
    $checkbox=$_POST['chkConfirm'] ;
}
if(isset($checkbox)){ 

$confirm='Agreed         <br />';

}
else{
$confirm='Not Agreed    <br />';
}
    echo "Confirm = $confirm";


?>

<?php
if(isset($_POST['logSub']))


if (empty($mail))
{
	echo"please fill up the email section   <br>";

}
if (empty ($comment)){
	echo"please fill up comment   <br>";
}
else{
	echo "Submit       <br>";
}

//

?>




<h1>Tax Calculator<br/></h1>
	<form method="POST" action="">
	<fieldset>
		<legend>Without Tax Calculator</legend>
		<label for="afterPrice"> After Tax Price:</label>
		<input type="text" name="afterPrice" value="<?php
		if(isset($_POST['afterPrice'])){
		echo $_POST['afterPrice']; 
		}?>" />
		<label for="taxRate">Rate:</label>
		<input type="text" name="taxRate" value="<?php 
		if(isset($_POST['taxRate'])){
			echo $_POST['taxRate'];
			}?>" />
		<input type="submit" value="submit" name="Submit"/>
		<input type="reset" value="Clear" />
	</fieldset>
	</form>
	
	<?php
	if(isset($_POST['Submit']))
	{
		$afterPrice=$_POST['afterPrice'];
		$taxRate=$_POST['taxRate'];

		//condition to check if both fields are not empty

		if (!empty($afterPrice) &&  !empty($taxRate)) 
		{
			//validate integer
			if(filter_var($afterPrice,FILTER_VALIDATE_INT) && filter_var($taxRate,FILTER_VALIDATE_INT))
			{
				$beforePrice=($afterPrice*100)/($taxRate+100);
				echo $beforePrice;
			}
			else if(filter_var($afterPrice,FILTER_VALIDATE_FLOAT) && filter_var($taxRate,FILTER_VALIDATE_FLOAT)) 
			{
				if (!preg_match('/^[0-9]+\.[0-9]{2}$/',$afterPrice))
				{
					echo "Please enter the price in the format 9.99 ";
				}
				else
				{
					$beforePrice=(($afterPrice*100)/($taxRate+100));
					echo number_format($beforePrice,2);
				}


			}
			else
			{
				echo "enter a valid number";
			}
		}
		else
		{
			echo "All fields are required";
		}
		
	}


?>


<h1>Passing Data Appended to an URL</h1>
	<h2>Pick a category</h2>
	<a href="watWk5.php">Films</a>
	<a href=" watWk5.php">Books</a>
	<a href=" watWk5.php">Music</a>


