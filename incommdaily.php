<?php
$servername = "exchange.fsc-portal.com";
$username = "nshiroma";
$password = “*******";
$dbname = "fsc_return";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
