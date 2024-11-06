<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}

$username = $_SESSION['username'];




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/outside-training/Day2/PHP/styles/welcome.css">
</head>

<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($username) ?>
        </h1>
        <p>You have successfully logged in to the dashboard of outside studio.</p>
        <button><a href="/outside-training/Day2/PHP/logout.php">Logout</a></button>
    </div>
</body>

</html>