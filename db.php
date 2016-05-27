<?php
$connection = mysql_connect('localhost:3306', 'adminLHx4JFG', 'CQiY5Vv9aMm4');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('iradubyak');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>