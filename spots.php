<?php

$servername = "107.180.20.80";
$username = "bala";
$password = "bala1";
$dbname = "BidSpot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Spots WHERE Parkinglot = " . $_GET['lot'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
echo " <form method='get' action='getSpot.php'> ";
echo "<button name='Username'";
echo " value ='";
echo $row["Username"];
echo "'";
echo " type='submit' >";
echo $row['Points'];
echo " </button>";
echo "</form>";
    }
} else {
    echo "<h1>No results</h1>";
}
$conn->close();

?>