<?php

/* INSE
   Logout Page
   This page will destroy all the sessions the user is on - summarily loggin them out
*/

session_start();
$_SESSION["login_status"] = "";
session_destroy();

?>