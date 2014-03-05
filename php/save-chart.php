<?php
session_start();
include 'db.php';

$postfile = $_POST["chartHtml"];
$UID = $_SESSION["UID"];
$cid = $_POST["pid"];



$state = "SELECT * FROM wbt WHERE wbt_id='".$cid."'";
	if ($result = $mysqli->query($state)) {
		$rows = $result->num_rows;
		if ($rows>0){
			$statement = "UPDATE wbt SET wbt_code='".$postfile."' WHERE wbt_id='".$cid."'";
			if ($mysqli->query($statement)) {
   				echo "Updated";
			}
		}
		else {
			$statement = "INSERT INTO wbt (wbt_code, user_ID) VALUES ('$postfile', '$UID')";
			if ($mysqli->query($statement)) {
   				echo "done";
			}
		}
	}
	else {
		$statement = "INSERT INTO wbt (wbt_code, user_ID) VALUES ('$postfile', '$UID')";
			if ($mysqli->query($statement)) {
   				echo "done";
			}
	}
$result->close();	
		












		
		
		
		

//$file = 'people.txt';


// Open the file to get existing content
//$current = file_get_contents($file);
// Append a new person to the file
//$current .= "John Smith\n";
// Write the contents back to the file
//file_put_contents($file, $postfile);






?>