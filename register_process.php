<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "restaurant_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $restaurant_name = $_POST["restaurant_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $location = $_POST["location"];

    // Insert data into the database
    $sql = "INSERT INTO restaurants (restaurant_name, email, password, location) VALUES ('$restaurant_name', '$email', '$password', '$location')";
    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to login page
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
