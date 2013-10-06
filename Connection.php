<?
$name = "root"; // username
$pas = "google"; // password 
$dbname = "helpinghands"; // database name
$con = mysql_connect("localhost",$name,$pas);
mysql_select_db($dbname,$con);
?>
