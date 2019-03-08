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
<?php
$hostname = 'localhost'; 
$username = 'root'; 
$password = ''; 
$databaseName = 'pramitma_c7190063'; 
//Open the database connection - exit with error message otherwise 
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");
//Make connection to database

$stmt = "CREATE TABLE customer
			(id INT AUTO_INCREMENT PRIMARY KEY,
         CustomerID	INT	(8)	
          FirstName	VARCHAR	(20),	
           LastName	VARCHAR	(20)		
             Email	VARCHAR	(50),		
          Password	VARCHAR	(256),		
            Gender	VARCHAR	(10)		
              Age	INT	(3))";

	include('connection.php');     
			$qry = mysqli_query(
				$connection,$stmt);
			if ($qry) {
				echo "";
			}
			else{
				echo "<br>";
				echo "";

			}
			$stmt="INSERT INTO customer VALUES ('2', 'pramit', 'marattha', 'P.Marattha2949@leedsbeckett.ac.uk', 'pramit01', 'M', '20')";
		$adddata = mysqli_query($connection,$stmt);
		if ($adddata) {
			echo "<br>";
			echo "";
		}
		else{
			echo "<br>";
			echo "";
		}
//(a)Gather from $_POST[]all the data submitted and store in variables
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

if(isset($_POST['Age'])){
    $age = $_POST['Age'];
}
if(isset($age)){
echo "Age= $age     <br>" ;
}


		
?>
