<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        // Checking if 'name' is set before using it to prevent undefined index notices
        echo isset($_POST['name']) ? strip_tags($_POST['name']) : 'Welcome';
        ?>
    </title>
    <link rel="stylesheet" href="./styles/welcome.css">
</head>

<body>
    <p>
        Hi,
        <?php
        // Safely outputting the user's name
        if (isset($_POST["name"])) {
            $output = strip_tags($_POST["name"]);
            echo $output ? $output : "coder!!!.";
        }

        ?>
    </p>
    <p>
        <?php
        // Checking if 'age' is set before using it
        if (isset($_POST["age"])) {
            $age = (int)htmlspecialchars($_POST["age"], ENT_QUOTES, 'UTF-8'); // Cast to int after sanitization
            if ($age < 18) {
                echo "You are a minor.";
            } else {
                echo "You are an adult.";
            }
        }
        ?>
    </p>
    <p>
        <?php
        // Checkig if 'color' is set before using it
        if (isset($_POST["color"])) {
            $color = htmlspecialchars($_POST["color"], ENT_QUOTES, 'UTF-8');
            switch ($color) {
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
        ?>
    </p>
    <p>
        <?php
        // Checking if 'age' is set before using it
        if (isset($_POST["age"])) {
            echo "Here is a list of years you have lived: <br />";
            $age = (int)$_POST["age"];

            for ($i = 0; $i <= $age; $i++) {
                echo "$i <br />";
            }
        }
        ?>
    </p>

    <div>
        <a href="/outside-training/Day1/PHP">Back</a>
        <a href="/outside-training/Day1/PHP">Next</a>
    </div>
</body>

</html>