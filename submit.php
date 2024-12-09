<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = "";     // Default XAMPP password is empty
$dbname = "singup"; // Updated database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$city = $_POST['city'];

// Insert data into database
$sql = "INSERT INTO user (name, email, age, gender, city) 
        VALUES ('$name', '$email', $age, '$gender', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "you submited successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
