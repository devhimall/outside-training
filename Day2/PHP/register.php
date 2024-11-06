<?php
$username = "";
$username_error = "";
$userpassword = "";
$userpassword_error = "";
$confirmpass = "";
$confirmpass_error = "";
$password_not_match_error = "";
$user_exist_error = $registration_success = "";


// including the connection file.
include("connectdb.php");


// hanlding the errors
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim($_POST['password']);
    $confirmpass = trim($_POST['confirmpass']);

    if (empty($username)) {
        $username_error = "Username is required";
    } else {
        $username = $username;
    }

    if (empty($password)) {
        $userpassword_error = "Password is required";
    } else {
        $userpassword = $password;
    }

    if (empty($confirmpass)) {
        $confirmpass_error = "Confirm password is required";
    } else {
        $confirmpass = $confirmpass;
    }


    // 
    if (empty($username_error) && empty($userpassword_error) && empty($confirmpass_error)) {
        $check_username = $conn->prepare("SELECT username FROM users WHERE username = ? ");
        $check_username->bind_param("s", $username);
        $check_username->execute();
        $check_username->store_result();

        if ($check_username->num_rows > 0) {
            $user_exist_error = "Username was already taken";
        } else {
            if ($password == $confirmpass) {
                $hashedpassword = password_hash($password, PASSWORD_BCRYPT);
                $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
                $stmt->bind_param("ss", $username, $hashedpassword);

                if ($stmt->execute()) {
                    $registration_success = "Account creation successful";
                } else {
                    echo "Error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                $password_not_match_error = "Passwords didn't match";
            }
        }
    } else {
        echo "";
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link rel="stylesheet" href="./styles/register.css">
</head>

<body>
    <div class="register-wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <?php if (empty($registration_success)) { ?>
                <div class="form-wrapper">
                    <header>
                        <h1>Create your account</h1>
                        <p>Fill the form below to create an account</p>
                    </header>
                    <div class="label-wrapper">
                        <label for="username">Username
                            <input type="text" id="username" placeholder="Username" name="username"
                                class="<?php echo !empty($username_error) ? 'error' : '' ?>" />
                        </label>
                        <p class="error">
                            <?php echo $username_error ?>
                        </p>
                        <p class="error">
                            <?php echo $user_exist_error; ?>
                        </p>
                        <label for="password">Password
                            <input type="password" placeholder="Password" id="password" name="password"
                                class="<?php echo !empty($userpassword_error) ? 'error' : ''  ?>" />

                        </label>
                        <p class="error">
                            <?php echo $username_error ?>
                        </p>
                        <label for="confirmpass">Confirm Password
                            <input type="password" placeholder="Confirm password" id="confirmpass" name="confirmpass"
                                class="<?php echo !empty($confirmpass_error) ? 'error' : '' ?>" />
                        </label>
                        <p class="error">
                            <?php echo $confirmpass_error ?>
                        </p>
                        <p class="error">
                            <?php echo $password_not_match_error; ?>
                        </p>

                        <div>
                            <span>Have an account? <a href="/outside-training/Day2/PHP/index.php">Login</a></span>
                            <button>create account</button>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="login-wrapper">
                    <p class="success">Registration successful</p>
                    <p class="login">would you like to login? <a href="/outside-training/Day2/PHP/index.php">Login</a>
                    </p>
                </div>
            <?php } ?>
        </form>
        <div class="image-wrapper">
            <img src="/outside-training/Day2/PHP/assets/logo.png" alt="outside-rojan-dai" />
        </div>
    </div>

</body>

</html>