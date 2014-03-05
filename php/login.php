<?php


/* 
   INSE - PORTSMOUTH UNIVERSITY
   
   09 Jan 2014
   Ver 1. Created the page with a very few lines of code to receive data from form - K
   Ver 2. Added a function $authenticate which will return true on valid email and password entered - K 
*/


// Getting username and password from the login page (index.html)

session_start();
include 'db.php';

$email = $_POST["username"];
$password = $_POST["password"];


$email = $mysqli->real_escape_string($email);
$password = $mysqli->real_escape_string($password);


/* The following is dummy authentication function
   Will be edited when database is created */
   
   
   
//function authenticate($e,$p){
	$statement = "SELECT * FROM user WHERE email='".$email."' AND password='".$password."'";
	if ($result = $mysqli->query($statement)) {
    		//printf("Select returned %d rows.\n", $result->num_rows);
		$rows = $result->num_rows;
		if ($rows>0){
			$value = $result->fetch_row();
			$D_Name =  $value[3];
			$D_Email = $value[1];
			$D_ID = $value[0];
			// echo $D_Name."aa".$D_Email;
			$_SESSION["login_status"] = "true";
			$_SESSION["name"] = $D_Name;
			$_SESSION["email"] = $D_Email;
			$_SESSION["UID"] = $D_ID;
			header ('Location: ../home.php');
		} else {
			//echo "Invalid Username or Password";
			header ('Location: ../?res=6');
		}
	
    	/* free result set */
    	$result->close();
	}else {
		//echo "Invalid Username or Password";
		header ('Location: ../?res=6');
	}
//}





   
//function authenticate($e,$p){
	// +++ INCLUDING DATABASE HERE +++
//	If (strtolower($e)=="test@test.com" && $p=="test"){
//		return true;
//	}
//}



// Checking if the login is successful
//if (authenticate($email,$password)) {
	// Diverting to home page
//	$_SESSION["login_status"] = "true";
//	header ('Location: ../home.html');
//} else {
	// Give out error message
//	echo "Invalid Username or Password";
//}


?>