<?php
define('DB_HOST', '107.180.20.80');
define('DB_NAME', 'BidSpot');
define('DB_USER','bala');
define('DB_PASSWORD','bala1');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['forms']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM User where Username = '$_POST[forms]' AND Password = '$_POST[Password1]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['Username']) AND !empty($row['Password']))
	{
		$_SESSION['Username'] = $row['Password'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>