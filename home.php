<?php
setcookie("Email", $_COOKIE["Email"], time() + 3600);
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="images/car-icon2.png">
    <meta id="meta" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/exprofile.css" type="text/css" />
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-4 col-md-6 col-sm-6">

                <div class="card hovercard" style="padding-bottom:20px;">
                    <div class="cardheader">

                    </div>
                    <div class="avatar">
                        <img alt="" src="showImage.php?name=
<?php 
mysql_connect('107.180.20.80','bala','bala1') or die("Failed to connect to MySQL: " . mysql_error());
$Email = $_COOKIE["Email"];
mysql_select_db('BidSpot') or die("Failed to connect to MySQL: " . mysql_error());
if (mysql_query("SELECT CurrentCar FROM User WHERE Email='$Email'")){
   $result = mysql_query("SELECT CurrentCar FROM User WHERE Email='$Email'");
   $row = mysql_fetch_assoc($result);
   $cars = (int) $row['CurrentCar'];
echo $cars;
   }

else {
   $cars = 0;
echo $cars;
}
?>

">
                    </div>
                    
                            <div class="info">
                                <div class="desc">Welcome, 
                                
<?php 

mysql_connect('107.180.20.80','bala','bala1') or die("Failed to connect to MySQL: " . mysql_error());
$Email = $_COOKIE["Email"];
mysql_select_db('BidSpot') or die("Failed to connect to MySQL: " . mysql_error());
if (mysql_query("SELECT FirstName, LastName FROM User WHERE Email='$Email'")){
   $result = mysql_query("SELECT FirstName, LastName FROM User WHERE Email='$Email'");
   $row = mysql_fetch_assoc($result);
   echo $row["FirstName"]." ".$row["LastName"];
   } 
?>

                                !</div>
                                <div class="title">
                                    <span>30</span>
                                </div>
                                <div class="desc">Spots Available!</div>
                            </div>                            
                        
                        <div class="bottom">
                            <span><span class="btn btn-small btn-primary-2">
<?php 

mysql_connect('107.180.20.80','bala','bala1') or die("Failed to connect to MySQL: " . mysql_error());
$Email = $_COOKIE["Email"];
mysql_select_db('BidSpot') or die("Failed to connect to MySQL: " . mysql_error());
if (mysql_query("SELECT Points FROM User WHERE Email='$Email'")){
   $result = mysql_query("SELECT Points FROM User WHERE Email='$Email'");
   $row = mysql_fetch_assoc($result);
   echo $row["Points"];
   } 
?>
                            </span> <i class="fa fa-ticket"></i></span>
                        </div>
                    
                    <div class="col-xs-12 hidden-md hidden-lg col-sm-6">
                        <form class="form-signin" method="post" id="logForm">
                            <button class="btn btn-lg btn-primary btn-block btn-find">Find A Spot</button>
                            <button class="btn btn-lg btn-primary btn-block btn-find">Hold A Spot</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>