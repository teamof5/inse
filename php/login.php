<?php

/* 
   09 Jan 2014
   Ver 1. Created the page with a very few lines of code to receive data from form - K
   Ver 2. Added a function $authenticate which will return true on valid email and password entered - K 
*/


// Getting username and password from the login page (index.html)

$email = $GET_["username"];
$password = $GET_["password"]


/* The following is dummy authentication function
   Will be edited when databse is created */
   
function $authenticate($e,$p){
	// +++ INCLUDING DATABASE HERE +++
	If (strtolower($e)="test@test.com" & $p="test"){
		return true;
	}
}


// Checking if the login is successful

if ($authenticate($email,$password)) {
	// Diverting to home page
	header ('Location: home.html');
} else {
	// Give out error message
}


?>