<?php
$servername = "localhost";
$databasename = "outside";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password, $databasename);

if ($conn->connect_error) {
    die("Connection failed to database" . $conn->connect_error);
}
