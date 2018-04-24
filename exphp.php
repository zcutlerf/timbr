<?php
$servername = 'localhost';
$username = 'id5405142_tree';
$password = 'timbrcity';
$dbname = 'id5405142_treeinfo';

// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname) or die (mysql_error());
//mysql_select_database($dbname) or die (mysql_error());

$conn = new mysqli($servername, $username, "", $password);
$conn->select_db($dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Trees (treeID, type, height, difficulty, lat, lng)
VALUES ('1234', 'red', '4', '1', '1.111'. '2.2222')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
