<?php

require("localcreds.php");

// Gets data from URL parameters.
$type = $_GET['type'];
$height = $_GET['height'];
$difficulty = $_GET['difficulty'];
$latitude = $_GET['lat'];
$longitude = $_GET['lng'];

$delID = 6; //this would be a command

echo "delID is " . $delID;

// Opens a connection to a MySQL server.

$connection=mysqli_connect("localhost:3306", $username, $password, $database);
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
$inSql = "INSERT INTO Tree (treeID, latitude, longitude, type, height, difficulty)
VALUES (DEFAULT,'$latitude', '$longitude', '$type', '$height', '$difficulty')";

//(DEFAULT,'43', '42', 'dec', 'ten feet', '5')";

$delSql = "DELETE FROM Tree WHERE treeID=$delID";

//insert
/*
if(mysqli_query($connection, $inSql)){
    //echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not execute $sql. \n" . mysqli_error($connection);
}*/

if(mysqli_query($connection, $delSql)){
    //echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not execute $sql. \n" . mysqli_error($connection);
}



?>
