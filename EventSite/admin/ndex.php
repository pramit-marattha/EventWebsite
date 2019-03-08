<!DOCTYPE html>
<html>
<head>
  <title> Login </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../watwk1/watweek1index.html">Week1</a>
                    </li>
                    <li class="active">
                        <a href="../watwk2/watweek2index.html">Week2</a>
                    </li>
                    <li class="active">
                        <a href="../watwk3/watweek3index.html">Week3</a>
                    </li>
                    <li class="active">
                        <a href="../watwk4/watweek4index.html">Week4</a>
                    </li>
                    <li class="active">
                        <a href="../watwk5/watweek5index.html">Week5</a>
                    </li>
                    <li class="active">
                        <a href="../watwk6/watweek6index.html">Week6</a>
                    </li>
                    <li class="active">
                        <a href="../Final_site_assignment/FinalSiteAssignmentindex.html">FinalSite Assignment</a>
                    </li>
                     <li class="active">
                        <a href="../watwk6/Sql/c7190063.sql">Week6-SQL</a>
                    </li>
</nav>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="process.php">
      <input type="text" name="uname" placeholder="username" value="<?php if(isset($_COOKIE['uname'])) echo $_COOKIE['uname']; ?>" required>

      <input type="password" name="pwd" placeholder="password"value="<?php if(isset($_COOKIE['pwd'])) echo $_COOKIE['pwd']; ?>" required>

<div class="checkbox">
 <input name="remember" id="remember" type="checkbox" 
<?php if(isset($_COOKIE['username'])){echo "checked='checked'"; } ?> value="1">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
      <input type="submit" name="submit" value="Submit">
     
      <p class="message">Did You Sign up ?<a href="../signup.php">Sign Up</a></p>
    </form>
  </div>
  </div>
</div>
</body>
<script type="text/javascript">
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</html>