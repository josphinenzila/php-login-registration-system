<?php include ('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration system using PHP and MYsql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Login</h2>
</div>
<form method="post" action="login.php">
<!--display validation of errors here-->
<?php include('errors.php');?>

<div class="input-group">
	<label>Username</label>
	<input type="text" name="username"></input>
</div>

</div>

<div class="input-group">
	<label>Password</label>
	<input type="password" name="password"></input>
</div>


<div class="input-group">
	<button type="submit" name="login" class="btn">Login</button>
</div>
<p>Not yet a member? <a href="register.php"> Sign Up</a>
</p>
</form>


</body>
</html>