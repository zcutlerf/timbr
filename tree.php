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
$connection=mysqli_connect("localhost", 'id5405142_tree', 'timbrcity', 'id5405142_treeinfo');
if (!$connection())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . PHP_EOL;
  }
  else {
  echo "Connected!"
  }
echo "Success: A proper connection to MySQL was made! The id5405142_treeinfo database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($connection) . PHP_EOL;

// Sets the active MySQL database.
$db_selected = mysqli_select_db($connection, id5405142_treeinfo);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Inserts new row with place data.
$sql = "INSERT INTO `Trees` (`treeID`, `type`, `height`, `difficulty`, `lat`, `lng`)
VALUES (`1234`, `red`, `4`, `1`, `001.111`, `002.2222`)"; //($treeID, $type, $height, $diff, $lat, $lng)";

echo "Conn" . $connection->query($sql) === TRUE;
if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
//error stuff doesn't work rn
?>
