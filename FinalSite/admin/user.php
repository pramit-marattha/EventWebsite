<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../signup.css">
</head>
<body>
<div class="login-page">
  <div class="form">
  	<form class="login-form" action="userreg.php" method="POST">
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
      <label for="Type">Type</label>
      <select name="type" style="margin-bottom: 10px;">
        <option value="1">Admin</option>
        <option value="0">User</option>
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
</body>
</html>