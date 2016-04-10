<?php
   $dbhost = '107.180.20.80';
   $dbuser = 'bala';
   $dbpass = 'bala1';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

$hash = md5( rand(0,1000) );
$sql = "UPDATE User SET hash='$hash' WHERE Email='$_POST[Email]'";
      
   mysql_select_db('BidSpot');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }

$to      = $_POST[Email]; // Send email to our user
$subject = 'Password Reset Link'; // Give the email a subject 
$message = '
 
Please click on this link to reset your password:
http://www.troyparking.com/bidspot/forgot.php?email='.$_POST[Email].'&hash='.$hash.'
 
';
                     
$headers = 'From:noreply@troyparking.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
echo "A reset link has been sent to your email: " . $_POST[Email];
   
   mysql_close($conn);
?>