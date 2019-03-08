<?php
//Make connection to database
include ('connection.php');
//Gather id from $_GET[]
$id = $_GET['id'];


//Construct DELETE query to remove record where WHERE id provided equals the id in the table
$sql = "DELETE FROM products WHERE ProductID = $id";

//run $query
$qry=mysqli_query($conn, $sql);

// check to see if any rows were affected

if (mysqli_affected_rows($conn) > 0) {

      //If yes , return to calling page(stored in the server variables)
      header("Location: {$_SERVER['HTTP_REFERER']}");

} else {
      // print error message
      echo "Error in query: $query. " . mysqli_error($connection);
      exit ;
}		
?>
