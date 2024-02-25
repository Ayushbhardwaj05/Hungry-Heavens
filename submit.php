<?php
// Connect to your MySQL database (replace these credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to handle file uploads
function uploadFile($file, $prefix) {
    $target_dir = "uploads/";
    $target_file = $target_dir . $prefix . basename($file["name"]);
    $target_file = str_replace(' ', '_', $target_file); // Replaces spaces with underscores
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($file["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $allowedFileTypes = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFileTypes)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return $target_file; // Return the path to the uploaded file
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    return ""; // Return an empty string if there was an error
}
// Process form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Example: Insert data into 'donation' table
    $addressLine1 = $_POST["addressLine1"];
    $addressLine2 = $_POST["addressLine2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postalCode = $_POST["postalCode"];
    $country = $_POST["country"];
    $photo = uploadFile($_FILES["photo"], "photo_");

    // Add additional fields based on your form

    $sql = "INSERT INTO donation (addressLine1, addressLine2, city, state, postalCode, country, photo)
            VALUES ('$addressLine1', '$addressLine2', '$city', '$state', '$postalCode', '$country', '$photo')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


