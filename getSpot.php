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

$sql = "SELECT * FROM Spots WHERE Username = " . " '" . $_GET['Username'] . "' ";
$result = $conn->query($sql);

if (!$result) {
    throw new Exception("Database Error [{$this->database->errno}] {$this->database->error}");
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
echo "This spot is being held by : ";
echo $row["Username"];
echo " at ";
echo $row["Parkinglot"];

echo ". It will cost you ";
echo $row["Points"];
echo " point(s).";

echo " <form method='get' action='transaction.php'> ";
echo "<button name='getSpot'";
echo " value ='";
echo $row["Username"];
echo "'";
echo " type='submit' >";
echo "Get Spot";
echo " </button>";
echo "</form>";

}
}


?>