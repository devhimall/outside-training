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
    <form action="./welcome.php" method="POST">
        <h2>Form</h2>
        <div>
            <label for="username">
                <span>Username *</span>
                <input type="text" placeholder="Enter your name" name="name" required />
            </label>
            <label for="age">
                <span>Age:</span>
                <input name="age" type="number" placeholder="Enter your age" required />
            </label>
            <label for="color">
                <span>Favourite Color:</span>
                <input name="color" type="text" placeholder="Enter your favourite color" required />
            </label>
        </div>
        <button type="submit">Submit</button>
    </form>

</body>

</html>