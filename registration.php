    <?php
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
        
        $city = $_POST['city'];
        $groupofblood = $_POST['groupofblood'];
        $age = $_POST['age'];

        $firstname = stripslashes($firstname);
        $firstname = mysql_real_escape_string($firstname);

        $lastname = stripslashes($lastname);
        $lastname = mysql_real_escape_string($lastname);

		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		
        $email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		
        $city = stripslashes($city);
        $city = mysql_real_escape_string($city);
        
        $groupofblood = stripslashes($groupofblood);
        $groupofblood = mysql_real_escape_string($groupofblood);
        
        $age = stripslashes($age);
        $age = (int) mysql_real_escape_string($age);
        
        $password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		
        $trn_date = date("Y-m-d H:i:s");
        
        $query = "INSERT into `users` (city, groupofblood, age, firstname, lastname, username, password, email, trn_date) VALUES ('$city','$groupofblood','$age','$firstname','$lastname','$username', '".md5($password)."', '$email', '$trn_date')";
        
        $result = mysql_query($query);
        
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1 align="center">Sign-up</h1>
<form align="center" name="registration" action="" method="post">
 <div><input type="text" name="firstname" placeholder="First Name" required /></div>
 <div><input type="text" name="lastname" placeholder="Last Name" required /></div>
 <div><input type="text" name="username" placeholder="Username" required /></div>
 <div><input type="email" name="email" placeholder="Email" required /></div>
 <div><input type="password" name="password" placeholder="Password" required /></div>
 <div><input type="text" name="city" placeholder="City" required /></div>
 <div><input type="text" name="groupofblood" placeholder="Group of blood" required /></div>
  <div><input type="number" name="age" placeholder="Age" required /></div>
<div><input type="submit" name="submit" value="Register"/></div>

</form>
</div>
<?php } ?>
</body>
</html>
