<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head><?php
if (isset($_COOKIE["Email"])){
  setcookie("Email", $_COOKIE["Email"], time() + 3600);
$query = mysql_query("SELECT *  FROM User where Email = '".$_COOKIE[Email]."'");
	$row = mysql_fetch_array($query);
$cars = (int) $row['Num_of_Cars'];
if ($cars > 0){
echo '<meta http-equiv="refresh" content="0;url=home.php">';
}
else{echo '<meta http-equiv="refresh" content="0;url=excarreg.php">';}
}
?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width = device-width, initial-scale = 1" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="shortcut icon" href="images/car-icon2.png">

    <title>TroyParking Login</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                <img id="profile-img" class="profile-img-card" src="images/car-icon2.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin" method="POST" action="connectivity.php" id="logForm">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                    
                    <button class="btn btn-lg btn-primary btn-block btn-signin" name="submit" id="button" type="submit">Sign in</button>
                </form><!-- /form -->
                <a href="forgotemail.html" class="forgot-password">
                    Forgot the password?
                </a>
<br>
<a href="registration.html" class="forgot-password">Don't have an account? Sign Up</a>
                </div>
            
            <div class="hidden-xs col-sm-8 col-md-4 col-lg-4 col-sm-offset-2 col-md-offset-0 col-lg-offset-0">
                <p class="side-column" id="why-join">
                    Why join TroyParking?
                    <ul class="ul-side">
                        <li>No more guessing where spots will be!</li>
                        <li>No more running late for class!</li>
                        <li>No more going to campus early just to find a spot!</li>
                        <li>No more tickets!!</li>
                        <li>Get the parking lot you want!</li>
                        <li id="last-item">It's 100% free!</li>
                        
                    </ul>
                </p>
            </div>
            </div>
            
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>