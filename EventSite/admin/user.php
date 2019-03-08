 <html>
 <head>
<?php session_start(); ?>
<?php include "../database.php"?>


  <title> ADD User </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  


  <style>
/* Style all input fields */
input {
  width: 70%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 30px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: limegreen;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
<div class="axv">
    <div class="container">
        <div class="row">
           
            <div class="col-sm-12" id="sf" >
              <h2 class="sa">Sign-UP</h2>
               <?php
                
          if(isset($_POST['submit'])){
             $email=htmlentities($_POST['email']);
             $contact=htmlentities($_POST['contact']);
             $role=$_POST['role'];
             $gender=$_POST['gender'];
             $username=htmlentities($_POST['username']);
             $fname=htmlentities($_POST['fname']);
           
             $lname=htmlentities($_POST['lname']);
             $age=htmlentities($_POST['age']);
             $password=$_POST['password'];
             $password1=$_POST['password1'];
              
              
             $qu="select * from user_info where username='$username'";
             $r=mysqli_query($conn,$qu);
             $count=mysqli_num_rows($r);
            $qu1="select * from user_info where email='$email'";
             $r1=mysqli_query($conn,$qu1);
             $count1=mysqli_num_rows($r1);

             $tmpname=$_FILES['img']['tmp_name'];
             $name=$_FILES['img']['name'];
             $size=$_FILES['img']['size'];
             $type=$_FILES['img']['type'];
             if($type=='img/png' or $type=='img/jpg' or $type='img/jpeg' or $type='img/gif'){
                 if($size<= 1048576){
              $patternforname= '/^([a-z])+$/i';
              $patternforpassword= '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
              
              
              if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                  if(preg_match('/^([a-z])+$/i', $fname)){//if(preg_match('/^[\w]+$/', $user_midname)){
                      if(preg_match('/^([a-z])+$/i', $lname)){
                //                  if(preg_match($patternforname,$user_fname) and preg_match($patternforname,$user_midname) and preg_match($patternforname,$user_lname)){

                      if(!empty($email) and !empty($username) and !empty($password) and !empty($age) and !empty($lname) and !empty($fname) and !empty($gender) and !empty($role) and !empty($contact)){
                 
                  if($count > 0){
                  
                  echo "<div class='alert alert-danger' role='alert'>
                       This Username is already in used try another!!
                   </div>";
                  
              }else{
                  
                  if($count1> 0){
                      echo "<div class='alert alert-danger' role='alert'>
                       This Email is already in used try another!!
                   </div>";
                  } else{
                      if(isset($_POST['check'])){
                 if($password1==$password){
                     if(preg_match($patternforpassword,$password)){
                          $password=md5($password);
                           $j="INSERT INTO `user_info`(`email`, `password`, `status`, `role`, `username`, `fname`,  `lname`, `age`, `contact`, `gender`,`profile`) VALUES('$email', '$password','1', '$role', '$username', '$fname','$lname', '$age', '$contact', '$gender','$name')";
                 
            
                  if(!mysqli_query($conn,$j))
                  {
                       echo("Error description: " . mysqli_error($r)); 
                      
                  }else{
                      
                          $dir="profile";
                     if(!file_exists($dir) && !is_dir($dir)){
                         mkdir($dir);
                     }
                     $uploadfull ="$dir/$name";
                     $upload = move_uploaded_file($tmpname,$uploadfull);
                  
                     echo '<script language="javascript">';
                        echo 'alert("Thank you!! Data Insertion Successfull!! Please Login!")';
                        echo '</script>'; 
                                          }
                         
                      }else{
                         echo "<div class='alert alert-danger' role='alert'>
                       Password should consist of one capital letter a number and these characters==>!@#$%^&*-
                   </div>";
                     }
                     
                  
              }else{
                  echo "<div class='alert alert-danger' role='alert'>
                        Password didn't match.
                   </div>";
              }
             }else{
                 echo "<div class='alert alert-danger' role='alert'>
                        Please agree the terms.
                   </div>";
             }
                  } 
             
                  
              }
                  
              }
              /*else{
                   echo "<div class='alert alert-danger' role='alert'>
                       Error!! Empty Field
                   </div>";
              }*/
                      }else{
                        echo "<div class='alert alert-danger' role='alert'>
                      Alphabet!!
                   </div>";
                         }
//         
                      }else{
                        echo "<div class='alert alert-danger' role='alert'>
                      Error!! Alphabet only...
                   </div>";
                  }
                  
                  
              }else{
                    echo "<div class='alert alert-danger' role='alert'>
                          Invalid email address
                   </div>";
              }
               
            }else{
             echo "<div class='alert alert-danger' role='alert'>
                          Image size is large!!
                   </div>";
         }
          }else{
            echo "<div class='alert alert-danger' role='alert'>
                          only Image!!
                   </div>";
     }
              
           
              
              
              
            
              
              
          }
              
         ?> 
                
                
                
                <form method="post" action="" enctype="multipart/form-data" >
        
        <div class="form-row">
  <div class="form-group col-md-4">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" aria-describedby="fullname" placeholder="First Name" value="<?php  if($_POST['fname']=''){echo '';}else{echo $_POST['fname'];}?>"   name="fname" >
     </div>
 
   <div class="form-group col-md-4">
    <label for="lname">last Name</label>
    <input type="text" class="form-control" id="lname" value="<?php  if($_POST['lname']=''){echo '';}else{echo $_POST['lname'];}?>" name="lname" placeholder="last Name" >
  </div>
   </div>
   
   <div class="form-row">
  <div class="form-group col-md-8">
    <label for="Email">Email</label>
    <input type="text" value="<?php  if($_POST['email']=''){echo '';}else{echo $_POST['email'];}?>" class="form-control" name="email" id="email" placeholder="Email" required>
  </div>
  <div class="form-group col-md-4">
    <label for="contact">Contact</label>
    <input type="number" class="form-control" value="<?php echo $_POST['contact']; ?>" id="contact" placeholder="Contact number" name="contact" required>
       </div></div>
       <div class="form-row ">
  <div class="form-group col-md-6">
  <label for="sel1">Age</label>
  <select class="form-control" id="sel1" name="age" required>
    <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="22">23</option>
        <option value="23">24</option>
        <option value="24">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
         <option value="31">31</option>
     
  </select>
  </div></div>
  
  <label for="gender">Gender</label><br>
  <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" checked>Male
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender">Female
  </label>
</div>
  <br><div class="form-row ">
  
  <div class="form-group col-md-6">
  <label for="sel1">Are you:</label>
  <select class="form-control" id="sel1" name="role">
  <!--  <option value="1">Student</option>-->
    <option value="0">     </option>
    <option value="1">Guest</option>
    <option value="2">Admin</option>

  </select>
</div>
  </div>
<div class="form-group">
    <label for="eventimage">Image</label>
    <input type="file" class="form-control-file" id="eventimage" name="img">
  </div>
   <div class="form-row ">
  <div class="form-group col-md-6">
    <label for="username">UserName</label>
    <input type="text" value="<?php  if($_POST['username']=''){echo '';}else{echo $_POST['username'];}?>" class="form-control" id="username" placeholder="Username" name="username" required>
       </div></div>
<div class="form-row ">
  <div class="form-group col-md-6">
    <label for="password">Password</label>
    <input type="password" value="<?php  if($_POST['password1']=''){echo '';}else{echo $_POST['password1'];}?>" class="form-control" id="password" placeholder="Enter Password" name="password1" required>
    </div></div><div class="form-row ">
  <div class="form-group col-md-6">
    <label for="password">Confirm Password</label>
    <input type="password" value="<?php  if($_POST['password']=''){echo '';}else{echo $_POST['password'];}?>" class="form-control" id="password" placeholder="Password" name="password" required>
    </div></div>
  <div class="form-check">
    <input type="checkbox"  class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label"  for="exampleCheck1"  value="1">I Agree the "terms and conditions"</label>
  </div>
  <br>




<div id="message">
  <h3>Password Should Be:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
        
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

  <input type="submit" class="btn btn-primary"  name="submit" value="Sign up" id="btn1">
<br>
<br>
<br>


  <button type="button" class="btn btn-info"><a href="../finallogin.php">LOG-IN</a></button>
</form>


                
            </div>

        </div>
    </div>
</div>









  </head>
  </html>