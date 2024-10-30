<?php
$username_error = "";
$age_error = "";
$favourite_color_error = "";
$age = null;
$username = "";
$favourite_color = "";

// Validating the username
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $username_error = "Name is required";
    } else {
        $username = htmlspecialchars($_POST['name']);
    }

    // Validating the age
    if (empty($_POST["age"])) {
        $age_error = "Age is required";
    } else {
        if (is_numeric($_POST["age"])) {
            // returning only integer not float
            $age = (int)$_POST["age"];
        } else {
            // returning error if the user enter data is not a number.
            $age_error = "Age should be number";
        }
    }

    if (empty($_POST['color'])) {
        $favourite_color_error = "Color is required";
    } else {
        if (ctype_alpha($_POST['color'])) {
            $color = $_POST['color'];
        } else {
            $favourite_color_error = "color should be in string like red, blue, black";
        }
    }

    // error is empty we are going to direct our form to welcome.php
    if (empty($username_error) && empty($age_error) && empty(($favourite_color_error))) {
        // sending the form data in the form of url in welcome.php
        header("location: welcome.php?name=$username&age=$age&color=$color");
        exit();
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 Assignments</title>
    <link rel="stylesheet" href="./styles/index.css" />
</head>

<body>
    <h1>Basics of PHP Day1 Assignments</h1>
    <p>Oct 24, 2024</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h2>Form</h2>
        <div>
            <label for="username">
                <span>Username *</span>
                <input type="text" placeholder="Enter your name" name="name" />
                <span style="color: red;">
                    <?php echo $username_error; ?>
                </span>
            </label>
            <label for="age">
                <span>Age:</span>
                <input name="age" type="number" placeholder="Enter your age" />
                <span style="color: red;">
                    <?php
                    echo $age_error;
                    ?>
                </span>
            </label>
            <label for="color">
                <span>Favourite Color:</span>
                <input name="color" type="text" placeholder="Enter your favourite color" />
                <span style=" color: red;">
                    <?php
                    echo $favourite_color_error;
                    ?>
                </span>
            </label>
        </div>
        <button type=" submit" name="submit">Submit</button>
    </form>

</body>

</html>