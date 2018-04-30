<?php

// Gets data from URL parameters.
$type = $_GET['type'];
$height = $_GET['height'];
$diff = $_GET['difficulty'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];

// Opens a connection to a MySQL server.

$connection=mysqli_connect("localhost:3306", "root", "timbrcity", "mydb");
if (!$connection){
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . PHP_EOL;
  exit;
  }
  else {
    echo "Connected!\n";
  }

echo "Host information: " . mysqli_get_host_info($connection) . PHP_EOL;

// Sets the active MySQL database.
$db_selected = mysqli_select_db($connection, "mydb");
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Inserts new row with place data.
$sql = "INSERT INTO Tree (treeID, latitude, longitude, type, height, difficulty)
VALUES (DEFAULT,'$lat', '$lat', '$type', '$height', '$diff')";


if(mysqli_query($connection, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not execute $sql. \n" . mysqli_error($connection);
}


?>
