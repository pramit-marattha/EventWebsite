<html> 
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
</html>

<?php
//$hostname = 'localhost'; 
//$username = 'root'; 
//$password = ''; 
//$databaseName = 'pramitma_c7190063'; 
//Open the database connection - exit with error message otherwise 
//$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");
//Make connection to database
//Make connection to database
include 'connection.php';
?>
<?php
echo '<h2>Select ALL from the Customer Table</h2>';
//run query to select all records from customer table
$query="SELECT * FROM customer";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}
echo '<h3>Select ALL from the customer Table with Age >22</h3>';
//run query to select all records from customer table
$query="SELECT * FROM customer where Age>22";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
}

echo '<h3>Select Females from the Customer Table with Age >=22</h3>';
//run query to select all records from customer table
$query="SELECT * FROM customer where Gender='F' order by Age>=22";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
}

echo '<h3>Select Males from the Customer Table list by age descending </h3>';
//run query to select all records from customer table
$query="SELECT * FROM customer where Gender='M'order by Age desc";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
}

echo '<h3>Select all with "a" in first name</h3>';
//run query to select all records from customer table
$query="SELECT * FROM customer where Firstname LIKE '%a%' ";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
}

?>
