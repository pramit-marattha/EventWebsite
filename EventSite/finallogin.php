 <?php session_start(); ?>
<?php include "database.php"?>
<!doctype html>
<html lang="en">
  <head>

  <title> Sign-UP </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body{
                background-color: lime-green;
                background-size: 20px;
            }
            .login{ 
                background-color: solid green;
                padding: 90px;
                margin-top: 100px;;
                margin-bottom: auto;
                margin-left: auto;
                margin-right: auto;
                max-width: 1000px;
                min-width: 400px;
                 border:10px solid orange;
            }
            .ac{
                  
                position: relative;
                left: 82px;
                top:-39px;
               
            }
            input[type=submit] {
  background-color: #4CAF50;
  color: white;
  border-radius: 60px;
}

input {
  
  border: 1px solid #ccc;
  border-radius: 60px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}




            @media only screen and (max-width: 400px) {
  /* For mobile phones: */
                .ac{
                    position: relative;
                left: 30px;
                top:-39px;
                }
}
      
      </style>
    <title>Login</title>
  </head>
  <body>
   
    <div class="login">
       <div class="ac">
        
            </div>
        <form method="post" action="">
        <?php 
      if(isset($_POST['login'])){
          $user=$_POST['user'];
          $pass=md5($_POST['password']);
          $qu="select * from user_info where (username='$user' or email='$user') and status=1";
          $r=mysqli_query($conn,$qu);
          $count=mysqli_num_rows($r);
          if($count==1){
            $qu1="select * from user_info where password='$pass' and status=1";
          $r1=mysqli_query($conn,$qu1);
          $count1=mysqli_num_rows($r1);
              
                        if($count1>=1){
              if(isset($_POST['remember'])){
                  
                  setcookie('user',serialize($user),time()+60*60*24*7);
                   setcookie('pass',serialize($pass),time()+60*60*24*7);

                         }

              while($row=mysqli_fetch_assoc($r)){
                  if($row['role']=='2'){
                       
                          $_SESSION['name']=md5('sdfjsnsdfjk');
                          $_SESSION['username']=$user;
                          $_SESSION['login_time']=time(); 
                          $_SESSION['idx']=$row['user_id'];
                      header("Location: admin/admin.php");
                      
                  }else{
                          header("Location: logoutIndex.php");
                          $_SESSION['name']=md5('12345');
                          $_SESSION['username']=$user;
                          $_SESSION['login_time']=time(); 
                          $_SESSION['idx']=$row['user_id'];
                  }
              }
           
          }else{
              echo "<div class='alert alert-danger' role='alert'>
                        password is invalid!!
                   </div>"; 
          }
              
              
          }else{
                echo "<div class='alert alert-danger' role='alert'>
                        Username/email isn't Register!!
                   </div>";
          }
          
            
      }
      ?>
  <div class="form-group">
    <label for="text">Enter Your Email address or Username</label>
    <input type="text" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Username" name="user">
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Password" name="password" >
  </div>
  <div class="form-row">
   
  <a href="finalsignup.php" class="form-check col-md-6">Don't have account????</a></div><br>
   <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rember">
    <label class="form-check-label" for="exampleCheck1" >Remember password</label>
      </div>
 <br>
  <input type="submit" class="btn btn-primary" value="Log in" name="login" width="100%">
</form>
    
        
      
    </div>
   
      
      <?php if(isset($_COOKIE['user']) and isset($_COOKIE['pass'])){
    $user = unserialize($_COOKIE['user']);
    $pass=unserialize($_COOKIE['pass']);
    echo "<script>document.getElementById('user').value='$user'</script>";
    echo "<script>document.getElementById('pass').value='$pass'</script>";
}?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>