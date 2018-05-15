<?php
//local version for now
//changes from local to nonlocal:
//localcreds.php instead of creds.php
//mydb instead of id#_mydb (id5405142)

//need to do from HTML:
// 1. make a "delete tree" button that
// 2. puts the treeID into a variable
// 3. sends that treeID to the deltree.php script

require("creds.php");

$delID = $_GET['treeID']; //gets the ID of the tree we want to delete

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

//Delete specific tree.
//index.html should check whether this operation is allowed
$delSql = "DELETE FROM Tree WHERE treeID=$delID";

//run the query
if(mysqli_query($connection, $delSql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not execute $sql. \n" . mysqli_error($connection);
}



?>
