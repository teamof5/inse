<?php

// Getting username and password from the login page (index.html)
$email = $GET_["username"];
$password = $GET_["password"]

// Checking if the login is successful
// +++ INCLUDING DATABASE HERE +++

if ($authentication) {
	// Divert to the home page
} else {
	// Give out error message
}

// ++ Diverting until database is applied
header ('Location: home.html');	

?>