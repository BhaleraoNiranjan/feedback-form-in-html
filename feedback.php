<?php
define('DB_HOST','localhost')
define('DB_NAME','practice')
define('DB_USER',root)
define('DB_PASSWORD','')

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL:".mysql_error());
$db = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySql:".mysql_error());

function feedback()
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$rate = $_POST['radio_experience'];
	$comment = $_POST['comment'];
	$query = INSERT INTO websiteuser(name,email,rate,comment)values($name,$email,$rate,$comment);
	mysql_query($query);	
}
if (isset($_POST['submit']))
{
	feedback();
}
?>
