
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
<h1>Some Useful Functions.</h1>
<?php
$password = "password";
//<script>alert("You have been hacked")</script>
//echo htmlentities($password);
 echo "Password is= " .trim($password) ; 
 
 echo "<br>"  

?>

<?php

if (empty ($password)){
	echo"please enter a password   <br>";
}
if (strlen($password) > 6) {
   
    echo "Password OK   <br>";
} if (strlen($password) <8) {
	
	echo "Your password must be between 6 and 8 characters in length.     <br>";
} 

if (is_numeric($password)) {
   
    echo "Password cannot be a number   <br>";
} 
else{
	
	echo "Password OK    <br>";
} 


 echo "encypted password:" .md5($password);

?>