<!doctype>
 <html>
 
 <head>
 <meta charset="utf-8">
 <title></title>
 <link rel="stylesheet" href="css/stylesheet.css">
 </head>
 
 <body>
  <form action="" method="Post" enctype="multipart/form-data">
   <input type="file" name="image"><input type="submit" name="submit" value="Upload">
  </form>

 <?php
 $imageName='';
 if(isset($_POST['submit']))
 {
 mysql_connect('107.180.20.80','bala','bala1');
 mysql_select_db('BidSpot');
 $imageName= mysql_real_escape_string($_FILES['image']['name']);
 $imageData=mysql_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
 $imageType=mysql_real_escape_string($_FILES['image']['type']);
 if(substr($imageType,0,5)=='image')
 {
  if(mysql_query("INSERT INTO Car values('','a@troy.edu','',2000,'','','$imageData','$imageType')"))
  {
   
   echo'file uploaded<br>';
  }
  else{
  echo mysql_error();
  }
 }else
 {
  echo 'its not an image<br>';
 }
}

?>

 </body>
 
 </html>


