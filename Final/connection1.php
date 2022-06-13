<?php

$servername = "	sql108.epizy.com";
$username = "epiz_29463225";
$password = "PTpV440XXp";
$dbname = "epiz_29463225_grillandchow";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>