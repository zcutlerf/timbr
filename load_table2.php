<?php


function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

require("creds.php");

// Opens a connection to a MySQL server
$connection=mysqli_connect("localhost", $username, $password, $database);
if (!$connection){
  //echo "Failed to connect to MySQL: " . mysqli_connect_error() . PHP_EOL;
  exit;
  }
  else {
    //echo "Connected!\n";
  }

// Set the active MySQL database
$db_selected = mysqli_select_db($connection, $database);
if (!$db_selected) {
  //echo 'Can\'t use db : ' . mysql_error();
  exit;
}
//echo($db_selected);

// Select all the rows in the markers table
//Eliana should only modify this paragraph
$query = "SELECT * FROM Tree WHERE 1";
$result = mysqli_query($connection, $query);
if (!$result) {
  //echo 'Invalid query: ' . mysql_error();
  exit;
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'User="' . parseToXML($row['User']) . '" ';
  echo 'treeID="' . $row['treeID'] . '" ';
  echo 'latitude="' . $row['latitude'] . '" ';
  echo 'longitude="' . $row['longitude'] . '" ';
  echo 'type="' . parseToXML($row['type']) . '" ';
  echo 'height="' . parseToXML($row['height']) . '" ';
  echo 'difficulty="' . parseToXML($row['difficulty']) . '" ';
  echo 'description="' . parseToXML($row['description']) . '" ';
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>';

?>
