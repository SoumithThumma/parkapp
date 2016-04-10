<!DOCTYPE html>
<html>
<head>
<?php
if (isset($_COOKIE["Email"])){
setcookie("Email", $_COOKIE["Email"], time() + 3600);
}
else {
echo '<meta http-equiv="refresh" content="0;url=login.php">';
}
?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="images/car-icon2.png">
    <meta id="meta" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reg.css" type="text/css" />
    <title>TP-Car Registration</title>


</head>
<body>
    <!-- the form action attribute needs to be changed -->


    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6 col-md-6 col-sm-6">

                <div class="card hovercard" style="padding-bottom:20px;">
                    <div class="cardheader-car">

                    </div>

                    <div class="info">


                    </div>

                    <div class="bottom">
                        <h2>Car Registration</h2>
                        <div class="desc" style="margin-top:10px; margin-bottom:20px; text-align:left;">
                            Before using this service, we require all users add at least one car to their account. Please fill out the form below.
                            You can have up to 3 cars linked to one account at a time.
                        </div>

                        <form class="form-register" method="post" action="carphp.php" autocomplete="on">
                            <script src="edmund.js"></script>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:5px; padding: 0px;"><div class="desc">Make</div></div>
                            <div class="form-group"><select id=Make name="Make" class="form-control" required> </select></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:5px; padding: 0px;"><div class="desc">Model</div></div>
                            <div class="form-group"><select id=Model name="Model" class="form-control" required> </select></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:5px; padding: 0px;"><div class="desc">Year</div></div>
                            <div class="form-group"><select id=Year name="Year" class="form-control" required> </select></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:5px; padding: 0px;"><div class="desc">Color</div></div>
                            <div class="form-group">
                                <select id=Color name="Color" class="form-control"required>
                                        <option value="Blank">  </option>
                                        <option value="White"> White </option>
                                        <option value="Black"> Black </option>
                                        <option value="Silver"> Silver </option>
                                        <option value="Gray"> Gray </option>
                                        <option value="Red"> Red </option>
                                        <option value="Blue"> Blue </option>
                                        <option value="Brown"> Brown </option>
                                        <option value="Beige"> Beige </option>
                                        <option value="Yellow/Gold"> Yellow/Gold </option>
                                        <option value="Green"> Green </option>
                                        <option value="Orange"> Orange </option>
                                        <option value="Purple"> Purple </option>
                                    </select>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:5px; padding: 0px;"><div class="desc">Upload Image Of This Car (OPTIONAL)</div></div>
                            <div class="form-group"><input id=Input type="file" style="width: 100%;"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom:20px; padding: 0px;"><div class="desc" style="font-size: 10px;">
                                Uploading an image of your car will help people spot your car when looking for your spot and when you arrive to take someone else's spot. You can always do this later from
                                your profile page.</div></div>


                            <button class="btn btn-lg btn-primary btn-block btn-find" type="submit" id="Submit">Register Vehicle</button>
                            <!--<input type="submit" value="Register" style="width:125px; height:25px;" id="Submit" />-->

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















<!--<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <title>Profile Page</title>
</head>
<body>

    <form method="post" action="carphp.php" autocomplete="on">

        <script src="edmund.js"></script>

        <h2> Troy Parking Profile Page </h2></br>




        <input id=Input type="file"> </input></br></br>


        <div>
            <label>If you would like to register your car now, you can use the drop-down menu below to choose your car's make/model/year/color.</label>
        </div>

        <p>
            <label>Please choose the car Make first, then choose the car Model, then choose the car Year and Color.</label></br></br>
            <label><strong>Make: </strong><select id=Make name="Make" required> </select></label>
            <label><strong>Model: </strong><select id=Model name="Model" required> </select></label>
            <label><strong>Year: </strong><select id=Year name="Year" required> </select></label>
            <label>
                <strong>Color: </strong><select id=Color name="Color" required>
                    <option value="Blank">  </option>
                    <option value="White"> White </option>
                    <option value="Black"> Black </option>
                    <option value="Silver"> Silver </option>
                    <option value="Gray"> Gray </option>
                    <option value="Red"> Red </option>
                    <option value="Blue"> Blue </option>
                    <option value="Brown"> Brown </option>
                    <option value="Beige"> Beige </option>
                    <option value="Yellow/Gold"> Yellow/Gold </option>
                    <option value="Green"> Green </option>
                    <option value="Orange"> Orange </option>
                    <option value="Purple"> Purple </option>
                </select>
            </label>
        </p>

        <p>
            <label name="Email" style='display:none;'></label>
        </p>

        <p>
            <input type="submit" value="Register" style="width:125px; height:25px;" id="Submit" />
        </p>

    </form>
</body>
</html>-->