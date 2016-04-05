 <?php
 $dbhost = '107.180.20.80';
   $dbuser = 'bala';
   $dbpass = 'bala1';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   mysql_select_db('BidSpot');

   if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysql_escape_string($_GET['email']); // Set email variable
    $hash = mysql_escape_string($_GET['hash']); // Set hash variable
                 
    $search = mysql_query("SELECT Email, hash, Active FROM User WHERE Email='".$email."' AND hash='".$hash."' AND Active='false'") or die(mysql_error()); 
    $match  = mysql_num_rows($search);
                 
    if($match > 0){
        // We have a match, activate the account
        mysql_query("UPDATE User SET Active='true' WHERE Email='".$email."' AND hash='".$hash."' AND Active='false'") or die(mysql_error());
        echo 'Your account has been activated, you can now login';
    }else{
        // No match -> invalid url or account has already been activated.
        echo 'You have already activated your account.';
    }
                 
}

 ?>