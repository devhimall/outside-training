<?php
if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['color'])) {
    $username = htmlspecialchars($_GET['name']);
    $userage = htmlspecialchars($_GET['age']);
    $user_color = htmlspecialchars($_GET['color']);

    echo "Hi, " . $username . "<br />";

    // checking if the user is minor or adult
    if ($userage) {
        if ($age < 18) {
            echo "You are a minor. <br />";
        } else {
            echo "You are an adult.<br />";
        }
    }

    // Showing favourite color of user.
    if ($user_color) {
        switch ($user_color) {
            case "red":
                echo "Red is a bold choice.";
                break;
            case "blue":
                echo "Blue is calming.";
                break;
            case "green":
                echo "Green represents nature.";
                break;
            default:
                echo "That's an interesting choice.";
        }
    }

    // looping the number of times the user age.
    if ($userage) {
        echo "<h3>Here is the list of years you have lived:</h3> ";
        for ($i = 0; $i <= $userage; $i++) {
            if ($i > $userage - 1) {
                echo "you are living your " . $i . "th year";
            } else {
                echo $i . "<br />";
            }
        }
    } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            // Checking if 'name' is set before using it to prevent undefined index notices
            echo isset($_GET['name']) ? strip_tags($_GET['name']) : 'Welcome';
            ?>
    </title>
    <link rel="stylesheet" href="./styles/welcome.css">
</head>

<body>
    <div>
        <a href="/outside-training/Day1/PHP">Back</a>
        <a href="/outside-training/Day1/PHP">Next</a>
    </div>
</body>

</html>

<?php } else {
    echo "<p>0 results.</p>";
} ?>