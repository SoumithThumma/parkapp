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
if(!empty($_POST['forms'])) 
{
	$query = mysql_query("SELECT *  FROM User where Username = '$_POST[forms]' AND Password = '$_POST[Password1]'");
	$row = mysql_fetch_array($query);

	if(!empty($row['Username']) AND !empty($row['Password']))
	{

		$_SESSION['Username'] = $row['Password'];
		echo "Login Complete";

	}
	else
	{
		echo "Wrong id or password";
	}
}
}

	SignIn();


?>