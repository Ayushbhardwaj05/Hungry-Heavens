<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "restaurant_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind parameters
$stmt = $conn->prepare("INSERT INTO orders (name, gender, address, email, pincode, food_type, num_plates) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssiss", $name, $gender, $address, $email, $pincode, $food_type, $num_plates);

// Set parameters
$name = $_POST["name"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$email = $_POST["email"];
$pincode = $_POST["pincode"];
$food_type = $_POST["food_type"];
$num_plates = $_POST["num_plates"];

// Execute the statement
if ($stmt->execute()) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
