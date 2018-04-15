<?php
require("tree.php");

// Gets data from URL parameters.
$treeID = $_GET['treeID']
$name = $_GET['type'];
$address = $_GET['height'];
$type = $_GET['difficulty'];
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
$query = sprintf("INSERT INTO markers " .
         " (treeID, type, height, difficulty, lat, lng) " .
         " VALUES (NULL, '%s', '%s', '%s', '%s', '%s');",
         mysql_real_escape_string($treeID),
         mysql_real_escape_string($type),
         mysql_real_escape_string($height),
         mysql_real_escape_string($difficulty),
         mysql_real_escape_string($lat),
         mysql_real_escape_string($lng));

$result = mysql_query($query);

if (!$result) {
  die('Invalid query: ' . mysql_error());
}

?>
