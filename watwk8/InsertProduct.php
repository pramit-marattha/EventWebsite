

<html>
<head>
	<body>
<h1>Manage Products</h1>
		<form method="post" enctype="multipart/form-data">
			<fieldset>
			<legend style='color:white;'>Enter new products detail</legend>
			
			Product Name <input type="text" name="name" />
			<br />
			Price <input type="text" name="price" />
			<br />
			 Image file name <input type="file" name="profilepic">
			 <br/>
			<input type="submit" value="Submit" name="submit" />
		</fieldset>
		</form>
		<script src="gumby/js/libs/jquery-2.0.2.min.js"></script>
<script gumby-touch="gumby/js/libs" src="gumby/js/libs/gumby.min.js"></script>
	</body>
</head>
	</html>

	<?php 
if (isset($_POST['submit'])){
	$name=$_POST['name'];
	$price=$_POST['price'];
	$tempname=$_FILES['profilepic']['tmp_name'];
	$pname=$_FILES['profilepic']['name'];
	$size=$_FILES['profilepic']['size'];
	$type=$_FILES['profilepic']['type'];
	
	if($type=='images/jpeg' OR $type=='images/jpg' OR $type=='images/png' OR $type='images/gif' AND $size<= 1048576){
  $stmt="INSERT INTO products(ProductID ,ProductName ,ProductPrice ,ProductImageName) VALUES ('0', '$name', '$price','$pname')";

  include('connection.php');
  $qry=mysqli_query($conn,$stmt);
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
    echo "File is uploaded successfully<br>";
    echo "<img src='$uploadfull' width=50 height=50 alt='$name'>";
  }

  else{
    echo "something is wrong";
  }
  }
}

}
?>