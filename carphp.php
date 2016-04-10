 <?php
 $dbhost = '107.180.20.80';
   $dbuser = 'bala';
   $dbpass = 'bala1';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   

   if(isset($_POST['Make']) && !empty($_POST['Make']) AND isset($_POST['Model']) && !empty($_POST['Model']) AND isset($_POST['Year']) && !empty($_POST['Year']) AND isset($_POST['Color']) && !empty($_POST['Color']))
   {
		// Verify data
		$Make = mysql_escape_string($_POST['Make']); // Set Make variable
		$Model = mysql_escape_string($_POST['Model']); // Set Model variable
		$Year = mysql_escape_string($_POST['Model']); // Set Year variable
		$Color = mysql_escape_string($_POST['Model']); // Set Color variable
			
		mysql_select_db('BidSpot');
		//$num_of_cars = mysql_query("SELECT Num_of_Cars FROM User WHERE Email='".$email."'") or die(mysql_error());
		$num_of_cars = mysql_query("SELECT Num_of_Cars FROM User WHERE Email='Bala@troy.edu'") or die(mysql_error());
		$cars = $num_of_cars['Num_of_Cars'];
		if($cars < 3)
		{
			//$insert = mysql_query("Insert into Car (Email, Make, Model, Year, Color) Values ('$_POST[Email]', '$_POST[Make]', '$_POST[Model]', '$_POST[Year]', '$_POST[Color]')") or die(mysql_error());
			$insert = mysql_query("Insert into Car (Email, Make, Model, Year, Color) Values ('Bala@troy.edu', '$_POST[Make]', '$_POST[Model]', $_POST[Year], '$_POST[Color]')") or die(mysql_error());
		}
		else
		{
			//print need to delete one car in order to register another car. Can only register up to 3 cars
		}
                 

        mysql_close($conn);         
	}

 ?>