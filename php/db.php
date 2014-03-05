<?php
$mysqli = new mysqli("localhost", "USER", "PASSWORD", "SELECTION-DB");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>