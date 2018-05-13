<?php

require("creds.php");

// Gets data from URL parameters.
$user = $_GET['User'];
$type = $_GET['type'];
$height = $_GET['height'];
$difficulty = $_GET['difficulty'];
$latitude = $_GET['lat'];
$longitude = $_GET['lng'];
$description = $_GET['description'];
// Opens a connection to a MySQL server.

$connection=mysqli_connect("localhost", $username, $password, $database);
if (!$connection){
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . PHP_EOL;
  exit;
  }
  else {
    echo "Connected!\n";
  }

echo "Host information: " . mysqli_get_host_info($connection) . PHP_EOL;

// Sets the active MySQL database.
$db_selected = mysqli_select_db($connection, "id5405142_mydb");
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Inserts new row with place data.
$sql = "INSERT INTO Tree (User, treeID, latitude, longitude, type, height, difficulty, description)
VALUES ('$user', DEFAULT,'$latitude', '$longitude', '$type', '$height', '$difficulty', '$description')";

//(DEFAULT,'43', '42', 'dec', 'ten feet', '5')";


if(mysqli_query($connection, $sql)){
    //echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not execute $sql. \n" . mysqli_error($connection);
}


?>
