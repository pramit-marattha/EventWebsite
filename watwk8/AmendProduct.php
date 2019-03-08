<?php
	$id=$_GET['id'];
	$sql="SELECT * from products WHERE ProductID=$id";
	include('connection.php');
	$qry=mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($qry))
	{
		$id = $row['ProductID'];
		$name = $row['ProductName'];
		$price = $row['ProductPrice'];
		$img = $row['ProductImageName'];

	}
?>
<html>
<body>
<form  method="POST"  enctype="multipart/form-data">
	<fieldset> 
		<legend> Enter new Product details </legend>
				<input type="hidden" name = "hideProductID" />
		Product Name:
		<input type = "text" name ="Productnames" ><br/>
		Price:
		<input type = "text" name = "price" ><br/>
		
		 Image file name <input type="file" name="profilepic">
		<input type = "submit" name="submit">
		</fieldset>
		</form>
</body>	
</html>

<?php

if (isset($_POST['submit']))
{
//Gather from $_POST[]all the data submitted and store in variables
$id = $_POST['hideProductID'];
$mname= $_POST['Productnames'];
$price = $_POST['price'];
$tempname=$_FILES['profilepic']['tmp_name'];
	$pname=$_FILES['profilepic']['name'];
	$size=$_FILES['profilepic']['size'];
	$type=$_FILES['profilepic']['type'];
//Produce an update query to update product record for the id provided
		if($type=='images/jpeg' OR $type=='images/jpg' OR $type=='images/png' OR $type='images/gif' AND $size<= 1048576){
$sql = "UPDATE products SET 
		ProductName = '$mname',
		ProductPrice = '$price',
		ProductImageName= '$pname'
		WHERE ProductID = '$id'";
//run query 
		include('connection.php');
  $qry=mysqli_query($conn,$sql);
  if($qry){
    //making the folder if  not exist in script executions path
  $dir="images/";
  if (!file_exists($dir)&& !is_dir($dir)) {
    mkdir($dir);  
  
  }
  //making upload path and file name
  $uploadfull="$dir/$name";

  //uploaded folder
  $upload=move_uploaded_file($tempname, $uploadfull);

  //checking the file is uploaded or not
  if ($upload) {
    header('Location:displayrecord.php');
  }

  else{
    header('Location:displayrecord.php');
  }
  }
}

}
?>
