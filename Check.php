<?php
if(isset($_POST['registration']))
{
require "connection.php";
$username = strip_tags($_POST['username']);
$password = md5(strip_tags($_POST['password']));

mysql_query("INSERT INTO login1(username,password) VALUES ('$username','$password')") 
  or  die("".mysql_error());

echo "Successful Registration!";
}
?>
