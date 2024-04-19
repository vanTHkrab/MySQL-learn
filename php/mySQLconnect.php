<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "vA-Me.@2686109363&NW";
$database = "mysql_php";
$port = 3306;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
mysqli_connect($hostname, $username, $password, $database, $port);
$connection = mysqli_connect($hostname, $username, $password, $database, $port);
if (!$connection) {
    echo "Failed to connect to MySQL: ";
}
else {
    echo "Connected to MySQL";
}