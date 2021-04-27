<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "timetacker";

$conn  = new mysqli($host, $username, $password,$dbname) or die("Connect failed: %s\n". $conn -> error);
?>