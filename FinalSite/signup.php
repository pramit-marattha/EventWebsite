<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="signup.css">
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
  	<form class="login-form" action="process.php" method="POST">
      <input type="text" name="fname" placeholder="firstname" required />
      <input type="text" name="lname" placeholder="lastname" required />
      <input type="text" name="uname" placeholder="username" required />
      <label for="age">Age</label>
      <select name="age" style="margin-bottom: 10px;">
        <option value="10-20">10</option>
        <option value="21-30">11</option>
        <option value="31-40">12</option>
        <option value="41-50">13</option>
        <option value="10-20">14</option>
        <option value="21-30">15</option>
        <option value="31-40">16</option>
        <option value="41-50">17</option>
        <option value="10-20">18</option>
        <option value="21-30">19</option>
        <option value="31-40">20</option>
        <option value="41-50">21</option>
        <option value="10-20">22</option>
        <option value="21-30">23</option>
        <option value="31-40">24</option>
        <option value="41-50">25</option>
        <option value="10-20">26</option>
        <option value="21-30">27</option>
        <option value="31-40">28</option>
        <option value="41-50">29</option>
        <option value="41-50">30</option>
         <option value="41-50">30-100</option>
      </select>
      <input type="email" name="email" placeholder="email" required />
      <input type="password" name="pwd" placeholder="password" required />
      <button class="btn btn-primary" name="signup" > Signup</button>
    </form>
  </div>
</div>
</body>
<script type="text/javascript">
	$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>



</html>