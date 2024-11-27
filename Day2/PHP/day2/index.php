<!-- Importing the database connection file -->
<?php
include './db_connect.php';

$sql = "SELECT name, math_grade, science_grade, english_grade FROM students";
$result = $conn->query($sql);

// Check if database table contains data
if ($result && $result->num_rows > 0) {
    $student_data = $result->fetch_all(MYSQLI_ASSOC);

    //checking if array is dimensional or multidimensional array.
    if (isset($student_data[0]) && is_array($student_data[0])) {
        echo "The array is a multidimensional array.";
    } else {
        echo "The array is a associative array";
    }
} else {
    echo "There is no results";
}

// Close the connection
$conn->close();
?>