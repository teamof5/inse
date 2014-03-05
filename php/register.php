<?php
include 'db.php';


$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$re_password = $_POST["re_password"];


$name = $mysqli->real_escape_string($name);
$email = $mysqli->real_escape_string($email);
$password = $mysqli->real_escape_string($password);
$re_password = $mysqli->real_escape_string($re_password);

if ($name=="" || $email=="" || $password=="" || $re_password==""){
	//echo "Please Fill All";
	header ('Location: ../signUp.php?res=1');
} else {
	if ($password != $re_password){
		//echo "The passwords Do Not Match";
		header ('Location: ../signUp.php?res=2');
	} else {

		$statement = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
		if ($mysqli->query($statement)) {
   			 //printf("%d Row inserted.\n", $mysqli->affected_rows);
   			 //echo "user added";
   			 header ('Location: ../?res=0');
		}

	}
}

$mysqli->close();

?>