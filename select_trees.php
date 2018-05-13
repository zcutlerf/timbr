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

//get the variables from the search parameters
$type = $_GET['type'];
$height = $_GET['height'];
$difficulty = $_GET['difficulty'];

// Opens a connection to a MySQL server.

$connection=mysqli_connect("localhost", $username, $password, $database);
if (!$connection){
  //echo "Failed to connect to MySQL: " . mysqli_connect_error() . PHP_EOL;
  exit;
  }
  else {
    //echo "Connected!\n";
  }

//echo "Host information: " . mysqli_get_host_info($connection) . PHP_EOL;

// Sets the active MySQL database.
$db_selected = mysqli_select_db($connection, "id5405142_mydb");
if (!$db_selected) {
  //die ('Can\'t use db : ' . mysql_error());
  exit;
}

$query = "";

if($type == "Deciduous"){
  if($height == "Short"){
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Short' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Short' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Short' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Short'";
    }
  } else if($height == "Medium"){
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Medium' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Medium' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Medium' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Medium'";
    }
  } else if($height == "Tall"){
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Tall' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Tall' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Tall' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND height = 'Tall'";
    }
  } else { //height = Any
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE type = 'Deciduous'";
    }
  }
} else if($type == "Evergreen"){
  if($height == "Short"){
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Short' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Short' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Short' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Short'";
    }
  } else if($height == "Medium"){
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Medium' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Medium' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Medium' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Medium'";
    }
  } else if($height == "Tall"){
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Tall' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Tall' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Tall' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND height = 'Tall'";
    }
  } else { //height = Any
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE type = 'Evergreen'";
    }
  }
} else { //type = Any
  if($height == "Short"){
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE height = 'Short' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE height = 'Short' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE height = 'Short' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE height = 'Short'";
    }
  } else if($height == "Medium"){
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE height = 'Medium' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE height = 'Medium' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE height = 'Medium' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE height = 'Medium'";
    }
  } else if($height == "Tall"){
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE height = 'Tall' AND difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE height = 'Tall' AND difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE height = 'Tall' AND difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE height = 'Tall'";
    }
  } else { //height = Any
    if($difficulty == "Easy"){
      $query = "SELECT * FROM Tree WHERE difficulty = 'Easy'";
    } else if($difficulty == "Intermediate"){
      $query = "SELECT * FROM Tree WHERE difficulty = 'Intermediate'";
    } else if($difficulty == "Difficult"){
      $query = "SELECT * FROM Tree WHERE difficulty = 'Difficult'";
    } else { //difficulty = Any
      $query = "SELECT * FROM Tree WHERE 1";
    }
  }
}

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
  echo 'User="' . $row['treeID'] . '" ';
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
