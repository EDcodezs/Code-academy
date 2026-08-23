<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST["fname"];
$lname = $_POST["lname"];

$age = $_POST["age"];
$gender = $_POST["gender"];

$height = $_POST["height"];
$nationality = $_POST["nationality"];

$likes = $_POST["likes"];
$dislikes = $_POST["dislikes"];

$favouriteMeal = $_POST["favouriteMeal"];
$favouriteHoliday = $_POST["favouriteHoliday"];

$sql = "INSERT INTO submissions (fname, lname, age, gender, height, nationality, likes, dislikes, favouriteMeal, favouriteHoliday)
        VALUES ('$fname', '$lname', '$age', '$gender', '$height', '$nationality', '$likes', '$dislikes', '$favouriteMeal', '$favouriteHoliday')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>✓ Thank you!</h2>";
echo "<p>Your form has been submitted successfully.</p>";
echo "<p>We’ll be in touch soon.</p>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>