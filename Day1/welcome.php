<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $_POST["name"] ?>
    </title>
    <link rel="stylesheet" href="./styles/welcome.css">
</head>

<body>
    <p>
        Hi, <?php echo $_POST["name"] ?>.
    </p>
    <p>
        <?php
        $age = $_POST["age"];
        if ($age < 18) {
            echo "You are a minor.";
        } else {
            echo "You are an adult.";
        }

        ?>
    </p>
    <p>
        <?php
        $color = $_POST["color"];

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

        ?>
    </p>
    <p>
        <?php
        echo "Here is a list  of years you have lived: <br />";
        $age = $_POST["age"];
        $age = (int)$age;

        for (
            $i = 0;
            $i <= $age;
            $i++
        ) {
            echo "$i <br />";
        }

        ?>
    </p>

    <div>
        <a href="/outside-training/Day1">Back</a>
        <a href="/outside-training/Day1">Next</a>
    </div>
</body>

</html>