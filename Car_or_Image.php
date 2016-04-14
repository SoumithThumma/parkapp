 <?php
 
	//Need to test this to make sure it works.
 
	session_start();
	$Email = $_COOKIE["Email"];
	if(isset($_POST['submit']))
	 {
		$conn = mysql_connect('107.180.20.80','bala','bala1');
		if(! $conn ) 
		{
			die('Could not connect: ' . mysql_error());
		}
		
		//Should only upload the car details if they leave the image null
		if(isset($_POST['Make']) && isset($_POST['Model']) && isset($_POST['Year']) && isset($_POST['Color']) && empty($_POST['Input']))
		{
			$Make = mysql_escape_string($_POST['Make']); // Set Make variable
			$Model = mysql_escape_string($_POST['Model']); // Set Model variable
			$Year = mysql_escape_string($_POST['Model']); // Set Year variable
			$Color = mysql_escape_string($_POST['Model']); // Set Color variable
			
			mysql_select_db('BidSpot');
			
			if (mysql_query("SELECT Num_of_Cars FROM User WHERE Email='$Email'"))
			{
			   $result = mysql_query("SELECT Num_of_Cars FROM User WHERE Email='$Email'");
			   $row = mysql_fetch_assoc($result);
			   $cars = (int) $row['Num_of_Cars'];
				if ($cars < 3)
				{
					$update = mysql_query("UPDATE User SET Num_of_Cars=$cars+1 WHERE Email='$Email'");
					$insert = mysql_query("Insert into Car (Email, Make, Model, Year, Color) Values ('$Email', '$_POST[Make]', '$_POST[Model]', $_POST[Year], '$_POST[Color]')") or die(mysql_error());
				}
				else
				{
					//print need to delete one car in order to register another car. Can only register up to 3 cars
					echo 'You Currently have 3 cars registered. In order to register another car you must first delete 1 car and then you may add another.<br>';
				}
							 

				mysql_close($conn);         
			}
		}
		//Else it branches into this and uploads everything at once. 
		else
		{
			$Make = mysql_escape_string($_POST['Make']); // Set Make variable
			$Model = mysql_escape_string($_POST['Model']); // Set Model variable
			$Year = mysql_escape_string($_POST['Model']); // Set Year variable
			$Color = mysql_escape_string($_POST['Model']); // Set Color variable
			$Input = mysql_escape_string($_POST['Input']); //Set Input variable
			$imageName= mysql_real_escape_string($_FILES['image']['name']);
			$imageData= mysql_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
			$imageType= mysql_real_escape_string($_FILES['image']['type']);
			
			mysql_select_db('BidSpot');
			if(substr($imageType,0,5)=='image')
			{
				if (mysql_query("SELECT Num_of_Cars FROM User WHERE Email='$Email'"))
				{
				   $result = mysql_query("SELECT Num_of_Cars FROM User WHERE Email='$Email'");
				   $row = mysql_fetch_assoc($result);
				   $cars = (int) $row['Num_of_Cars'];
					if ($cars < 3)
					{
						$update = mysql_query("UPDATE User SET Num_of_Cars=$cars+1 WHERE Email='$Email'");
						//change insert statement to insert into every field needed. probably on the godaddy server
						$insert = mysql_query("Insert into Car Values ('$Email', '$_POST[Make]', '$_POST[Model]', $_POST[Year], '$_POST[Color]', '$imageData', '$imageType')") or die(mysql_error());
					}
					else
					{
						//print need to delete one car in order to register another car. Can only register up to 3 cars
						echo 'You Currently have 3 cars registered. In order to register another car you must first delete 1 car and then you may add another.<br>';
					}
								 

					mysql_close($conn);   				
				}
				else
				{
					echo 'This is not an acceptable image type. Please make sure it is.'
				}
			}
			
		}
			
	}	

 ?>