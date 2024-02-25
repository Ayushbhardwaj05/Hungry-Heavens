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

// Retrieve form data
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

// Check if new password matches confirm password
if ($new_password !== $confirm_password) {
    die("New password and confirm password do not match.");
}

// Retrieve current password from the database
$sql = "SELECT password FROM restaurants WHERE id = 1"; // Assuming id 1 represents the restaurant for which password is being changed
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $current_password_db = $row["password"];

    // Verify if current password matches the one in the database
    if ($current_password === $current_password_db) {
        // Update the password in the database
        $update_sql = "UPDATE restaurants SET password = '$new_password' WHERE id = 1";
        if ($conn->query($update_sql) === TRUE) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Incorrect current password.";
    }
} else {
    echo "Restaurant not found.";
}

$conn->close();
?>
