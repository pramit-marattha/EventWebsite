<?php
	$id=$_GET['id'];
	$sql="SELECT * from login3 WHERE id=$id";
	include('../connection.php');
	$qry=mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($qry))
	{
	$id=$row['Id'];
	$firstname = $row['FirstName'];
	$lastname = $row['LastName'];
	$username = $row['UserName'];
	$email = $row['Email'];
	$age = $row['Age'];
	$password = $row['Password'];
	}
?>
<!doctype>
<html>
<head>
	<title>Edit</title>
	<meta charset="utf-8"/>
	<meta name="author" content="yourname" />
</head>
<body>
	 <div class="form">
	 <table style="padding: 10px 10px 10px 10px;">
  	<form class="login-form" action="" method="POST" style="width: 50% padding: 10px 10px 10px 10px;">

      <tr><td><input type="text" name="id" value="<?php echo $id;?>" readonly /></td></tr>
     <tr> <td><input type="text" name="fname" placeholder="firstname" value="<?php echo $firstname;?>" required /></td></tr>
      <tr><td><input type="text" name="lname" placeholder="lastname" value="<?php echo $lastname;?>" required /></td></tr>
      <tr><td><input type="text" name="uname" placeholder="username" value="<?php echo $username;?>" required /></td></tr>
    <tr> <td> <label for="age">Age</label></td></tr>
    <tr> <td> <select name="age" style="margin-bottom: 10px;">
        <option value="10-20">10-20</option>
        <option value="21-30">21-30</option>
        <option value="31-40">31-40</option>
        <option value="41-50">41-50</option>
      </select></td></tr>
     <tr><td> <input type="email" name="email" placeholder="email" value="<?php echo $email;?>" required /></td></tr>
    <tr> <td> <input type="password" name="pwd" placeholder="password" required /></td></tr>
     <tr> <td><button type="submit" class="btn btn-primary" name="submit" > Submit</button></td></tr>
      </table>

    </form>
  </div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$username = $_POST['uname'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$password = md5($_POST['pwd']);
	include('../connection.php');
	$sql="UPDATE login3 
	SET
	FirstName = '$firstname',
	LastName = '$lastname',
	UserName = '$username',
	Email = '$email',
	Age = '$age',
	Password = '$password'
	WHERE
	Id='$id'
	";
	$qry = mysqli_query($conn, $sql);
	if($qry)
	{
		header('Locaton: admin.php');

	}
	else
	{
		echo "Oops! Something Wrong";
	}
}
?>