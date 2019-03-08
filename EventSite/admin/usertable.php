
<?php include "../database.php"?>
<!doctype html>
<html>
<head>
<title>Dashboard</title>
	<meta charset="utf-8"/>
	<meta name="author" content="name" />
</head>
<body>
	<h1>Edit And Delete User</h1>



 <?php
           $query="SELECT * FROM user_info";     
          $result=mysqli_query($conn, $query); 
             echo "<table  class='table table-striped table-dark'> <tr><th scope='col'>User Id</th><th scope='col'>Name</th><th scope='col'>Username</th><th scope='col'>Email</th><th scope='col'>Edit</th><th scope='col'>Delete</th></tr>";

            while ($row=mysqli_fetch_assoc($result)){
                $user_id=$row['user_id'];
            echo "<tr><td scope='row'>".$row['user_id']."</td><td scope='row'>".$row['fname'] .$row['lname']."</td><td scope='row'>".$row['username']."</td><td scope='row'>".$row['email']."</td> <th scope='col'><a href='usertable.php?edit={$user_id}' class='az'>Edit</a></th> <th scope='col'><a class='az' href='usertable.php?delete={$user_id}'>Delete</a></th></tr>";
            }
echo "<table>";
?>
          <?php include "deleteuser.php"; ?>
   <?php include "updateuser.php"; ?>
          
                  <?php
          if(isset($_GET['edit'])){
              $editid=$_GET['edit']; //selecting the value of so that we can pass the value in edit form
              $editquery= "SELECT * FROM user_info where user_id={$editid}";
              $resultedit=mysqli_query($conn,$editquery);
              while($editrow=mysqli_fetch_assoc($resultedit)){
                  
                        $user_id=$editrow['user_id'];
                        $email=$editrow['email'];
                        $password=$editrow['password'];
                        $role= $editrow['role'];
                        $username=$editrow['username'];
                        $fname= $editrow['fname'];
                        $lname=$editrow['lname'];
                        $age=$editrow['age'];
                        $contact=$editrow['contact'];
                        $gender=$editrow['gender'];
                  
                        $profile=$editrow['profile'];
                    ?>
                      
                      <div class="container">
        <div class="row">
           
            <div class="col-sm-12" id="sf" >
                
                <form method="post" enctype="multipart/form-data">
                
                
				<h2 class="sa">Update Account</h2>
				<div class="form-row">
  <div class="form-group col-md-4">
    <input type="text" value="<?php echo $user_id; ?>" name="id" hidden>
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" aria-describedby="fullname" placeholder="First Name"  name="fname" value="<?php echo $fname;?>" required>
     </div>
   <div class="form-group col-md-4">
    <label for="lname">last Name</label>
    <input type="text" value="<?php echo $lname;?>" class="form-control" id="lname" placeholder="last Name" name="lname" required>
  </div>
   </div>
   <div class="form-row">
  <div class="form-group col-md-8">
    <label for="Email">Email</label>
    <input type="email" value="<?php echo $email;?>" class="form-control" id="email" placeholder="Email" name="email" required>
  </div>
  <div class="form-group col-md-4">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" value="<?php echo $contact; ?>" id="contact" placeholder="Contact number" name="contact" required>
       </div></div>
        <div class="form-row ">
  <div class="form-group col-md-6">
    <label for="username">Username</label>
    <input type="text" value="<?php echo $username;?>" class="form-control" id="username" placeholder="Username" name="username" required>
       </div></div>
       <div class="form-row ">
  <div class="form-group col-md-6">
  <label for="sel1">Age:</label>
  <select class="form-control" id="sel1" name="age">
  <option value="11" <?php if($age==11){echo "Selected";}?>>11</option>
  <option value="12" <?php if($age==12){echo "Selected";}?>>12</option>
  <option value="13" <?php if($age==13){echo "Selected";}?>>13</option>
   <option value="14" <?php if($age==14){echo "Selected";}?>>14</option>
   <option value="15" <?php if($age==15){echo "Selected";}?>>15</option>
   <option value="16" <?php if($age==16){echo "Selected";}?>>16</option>
   <option value="17" <?php if($age==17){echo "Selected";}?>>17</option>
   <option value="18" <?php if($age==18){echo "Selected";}?>>18</option>
   <option value="19" <?php if($age==19){echo "Selected";}?>>19</option>
   <option value="20" <?php if($age==20){echo "Selected";}?>>20</option>
   <option value="21" <?php if($age==21){echo "Selected";}?>>21</option>
   <option value="22" <?php if($age==22){echo "Selected";}?>>22</option>
   <option value="23" <?php if($age==23){echo "Selected";}?>>23</option>
   <option value="24" <?php if($age==24){echo "Selected";}?>>24</option>
   <option value="25" <?php if($age==25){echo "Selected";}?>>25</option>
  </select>
</div>
                    </div>
  
  <label for="optradio">Gender</label><br>
  <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" value="M" <?php if($gender=="M"){echo "checked";}?>>Male
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" value="F" <?php if($gender=="F"){echo "checked";}?>>Female
  </label>
</div>
 <br><div class="form-row ">
  <div class="form-group col-md-4">
    <label for="eventimage">Image</label>
    <input type="file" class="form-control-file"  id="eventimage" name="img"><br> <img width="200" src="uploads/<?php echo $profile; ?>">
  </div>
  
  <div class="form-group col-md-6">
  <label for="sel1">Are you:</label>
  <select class="form-control" id="sel1" name="role">
  	  <option value="0" <?php if($role==0){echo "Selected";}?>>     </option>
  <option value="1" <?php if($role==1){echo "Selected";}?>>User</option>
  <option value="2" <?php if($role==2){echo "Selected";}?>>Admin</option>
 
  </select>
</div>
  </div>
  
  <input type="submit" class="btn btn-primary"  name="update" value="Update" id="btn1">
</form>
                
            

        </div>
    </div>
</div>        
<?php }} ?>



















          


























































	<?php
	/*
include_once('../connection.php');
$sql="SELECT * FROM login3";
$qry=mysqli_query($conn, $sql);
echo "<table border=1 style='width:100%;'>";
echo "<tr>";
echo "<td>User Id</td><td>First Name</td><td>Last Name</td><td>User Name</td><td>Email</td><td>Age</td><td>Password</td><td>Edit</td><td>Delete</td></tr>";
while($row=mysqli_fetch_array($qry))
{
	$id=$row['id'];
	$firstname = $row['FirstName'];
	$lastname = $row['LastName'];
	$username = $row['UserName'];
	$email = $row['Email'];
	$age = $row['Age'];
	$password = $row['Password'];
echo "<tr><td>$id</td><td>$firstname</td><td>$lastname</td><td>$username</td><td>$email</td><td>$age</td><td>$password</td><td>
<a href='edituser.php?id=$id'>Edit</a>
</td><td>
<a href='deleteuser.php?id=$id'>Delete</a></td></tr>";
}
echo "</table>";
	*/?>
</body>
</html>

