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
<form method="POST" action="insertRecord.php">
<fieldset>
		<legend>Enter Customer Details</legend>
		<label for="firstname">Firstname: </label>
		<input type="text" name="txtfirstname"/><br><br>
		<label for="surname">Surname: </label>
		<input type="text" name="txtsurname"/><br /><br>
		<label for="email">Email: </label>
		<input type="text" name="txtEmail"/><br /><br>
		<label for="passwd">Password: </label>
		<input type="password" name="txtPass" /><br /><br>
		<label for="gender">Gender: </label>
        <select name="gender">
	    <option value=" Male ">Male </option>
	    <option value=" Female ">Female </option>
	    <option value=" other ">other </option>
	  </select><br><br>
	  <label for="age">Age: </label>
		<input type="text" name="txtAge"/><br /><br>
		<input type="submit" value="Submit" name="loginSubmit"  />
	</fieldset>
</form>

<?php
if(isset($_POST['loginSubmit']))
	{
if(isset($_POST['txtfirstname'])){
    $firstname = $_POST['txtfirstname'];
}
if(isset($firstname)){
echo "FirstName= $firstname     <br>" ;
}

if(isset($_POST['txtsurname'])){
    $surname = $_POST['txtsurname'];
}
if(isset($surname)){
echo "SurName= $surname     <br>" ;
}

if(isset($_POST['txtEmail'])){
    $email = $_POST['txtEmail'];
}
if(isset($email)){
echo "Email= $email     <br>" ;
}

if(isset($_POST['txtPass'])){
    $pass = $_POST['txtPass'];
}
if(isset($txtPass)){
echo "Password= $pass     <br>" ;
}

if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
}
if(isset($gender)){
echo "Gender= $gender     <br>" ;
}

if(isset($_POST['txtAge'])){
    $age = $_POST['txtAge'];
}
if(isset($age)){
echo "Age= $age     <br>" ;
}
}

$query="INSERT INTO customer2 (firstname, surname, email, passwd, gender, age) VALUES ('pramit','marattha','P.Marattha2949@leedsbeckett.ac.uk','pramit01','M','20')";

        
?>
<br>
<br>
<br>
<br>

<?php 
include 'selectRecord.php';
?>

