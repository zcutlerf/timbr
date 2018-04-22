<?php
require("tree.php");

// Gets data from URL parameters.
$treeID = $_GET['treeID'];
$type = $_GET['type'];
$height = $_GET['height'];
$diff = $_GET['difficulty'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];


// Opens a connection to a MySQL server.
$connection=mysqli_connect("localhost", id5405142_tree, id5405142_tree, timbrcity, id5405142_treeinfo);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// Sets the active MySQL database.
$db_selected = mysqli_select_db($connection, id5405142_treeinfo);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Inserts new row with place data.
$sql = "INSERT INTO Trees (treeID, type, height, difficulty, lat, lng)
VALUES ('1234', 'red', '4', '1', '001.111'. '002.2222')"; //($treeID, $type, $height, $diff, $lat, $lng)";

echo $connection->query($sql) == TRUE;

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//error stuff doesn't work rn
?>
