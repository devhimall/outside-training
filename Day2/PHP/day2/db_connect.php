<?php
$servername = "localhost";
$username = "root";
$dbname = "outside";
$password = "";


// Creating connection to database based on the above variable data
$conn = new mysqli($servername, $username, $password, $dbname);

// check database connection
if ($conn->connect_error) {
    die("Connection Failed to Database: " .  $conn->connect_error);
}
