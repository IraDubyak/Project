<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sign-in</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: dashboard.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1 align="center">Log In</h1>
<form align="center" action="" method="post" name="login">
<div><input type="text" name="username" placeholder="Username" required /></div>
<div><input type="password" name="password" placeholder="Password" required /></div>
<div><input name="submit" type="submit" value="Login" /></div>
</form>
<p align="center"><a style="color:#A83B2A;" href='registration.php'>Sign-up</a></p>
</div>
<?php } ?>
</body>
</html>
