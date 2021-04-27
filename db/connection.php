<?php
$host = "localhost";
$username = "timesheet";
$password = "";
$dbname = "timesheet";

$conn  = new mysqli($host, $username, $password,$dbname) or die("Connect failed: %s\n". $conn -> error);
?>