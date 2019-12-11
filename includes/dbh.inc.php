<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "hms";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    echo "failed";
    echo mysqli_connect_error();
    die("Connection Failed: ".mysqli_connect_error());
}