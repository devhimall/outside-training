<?php
session_start();

$username = "";
$username_error = "";
$password = "";
$password_error = "";

// including the connection file.
include("./connectdb.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // checking if username field empty or not
    if (empty($_POST['username'])) {
        $username_error = "Username required";
    } else {
        $username = trim($_POST["username"]);
    }

    // checking if password field is empty or not
    if (empty($_POST['password'])) {
        $password_error = "Password is required";
    } else {
        $password = trim($_POST['password']);
    }

    if (empty($username_error) && empty($password_error)) {
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        if (!$stmt) {
            die("database error" . $conn->error);
        }

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['username'] = $username;
                header("location: welcome.php");
            } else {
                echo "incorrect password. Please try again later.";
            }
        } else {
            echo "No user found with that username.";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outside</title>
    <link rel="stylesheet" href="./styles/index.css" />
</head>

<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <h1>Welcome to Outside</h1>
            <div>
                <label for="username">Username
                    <input type="text" id="username" placeholder="Username" name="username"
                        class="<?php echo !empty($username_error) ? 'error' : '' ?>" />
                </label>
                <span class=" error">
                    <?php echo $username_error ?>
                </span>
                <label for="password">Password
                    <input type="password" placeholder="Password" id="password" name="password"
                        class="<?php echo !empty($password_error) ? 'error' : '' ?>" />
                </label>
                <span class=" error">
                    <?php echo $password_error ?> </span>
                <div class="form-btn">
                    <span>don' t have an account? <a href="/outside-training/Day2/PHP/register.php">create
                            account</a></span>
                    <button name="submit" type="submit">Login</button>
                </div>

            </div>
        </form>
    </div>
</body>

</html>