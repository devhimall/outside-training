<?php
session_start();

// unseting all the sesion variables
$_SESSION = array();

// destroying the sesion
session_destroy();

// redirecting the user to login page.
header("location: index.php");
