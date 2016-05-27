<?php
?>

<?php include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="systems.css">
    <meta charset="UTF-8">
</head>
<body>
<div class="form">
<h1 align="center">Welcome, <?php echo $_SESSION['username']; ?>!</h1>
<p align="center"><a href="dashboard.php">Знайти хворобу</a></p>
<p align="center"><a href="logout.php">Вийти</a></p>
</div>
<h1 align="center"> Хвороби: </h1>
<div id="myId" align="center">

</div>
<script>
var myArray = ['Застуда', 'Грип', 'Отруєння', 'Нефрит', 'Отит', 'Опік', 'Гіпертонія', 'Ангіна']
	var jsvar = <?php 
	require('db.php');
	include("auth.php");
	$result = array();
    $email= $_SESSION["username"];
    $sql = "SELECT `text` FROM `item` WHERE `user_id` = '$email'";
    $result = mysql_query($sql);
    $id = array();
    $i = 0;
    while($i < mysql_num_rows($result)){
        $id[$i] = array('text' => mysql_result($result, $i,"text")) ;
        $i++;
    }

    echo json_encode($id); 
  ?>;
  for(var i = 0; i < jsvar.length; ++i){
  	$("#myId").prepend('<h3 style="color:re">'+ myArray[jsvar[i].text] + '</h3>');
  }
  
</script>
</body>
</html>
