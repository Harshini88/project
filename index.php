<?php
$servername = "192.168.0.9";
$username = "root";
$password = "123";
$dbname = "tech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM techpioneer3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "fooditeam: " . $row["fooditeam"]. " - price: " . $row["price"]. "quantity : " . $row["quantity"]. "<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>
