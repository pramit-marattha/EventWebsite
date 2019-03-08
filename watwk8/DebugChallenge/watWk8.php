<!DOCTYPE html>
<html>
 <head>
  <title>Manage | Product</title>
  <meta charset="utf-8"/>
  <meta name="" content=""/>
 </head>
 <body>
   <h2>Manage Product</h2>
  <fieldset>
  	<legend>Enter New Product Details</legend>
  	<form method="POST" action="insertProduct.php" name="pform" enctype="multipart/form-data">
  	<label>Product Name:</label><br/>
  	<label><input type="text" name="pname"></label><br/><br/>
  	<label>Price:</label><br/>
  	<label><input type="text" name="price"></label><br/><br/>
  	<label>Image Filename:</label><br/>
  	<label><input type="file" name="image"></label><br/><br/>
  	<label><input type="submit" name="upload" value="Submit"></label>
  	<label><input type="reset" name="clear" value="Clear"></label>
  	</form>
  </fieldset>  
 </body>
</html>
