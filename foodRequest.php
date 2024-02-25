<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Requests</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    .sidebar {
      width: 250px;
      height: 100%;
      background-color: #333;
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 20px;
    }
    .sidebar a {
      display: block;
      padding: 10px 20px;
      color: #fff;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #555;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
    }
    .card {
      background-color: #fff;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .card h2 {
      margin-top: 0;
    }
    .card a {
      color: #007bff;
      text-decoration: none;
    }
    .card a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <a href="#">Dashboard</a>
  <a href="#">Food Requests</a>
  <a href="#">Order History</a>
  <a href="#">Settings</a>
  <a href="logout.php">Log Out</a>
</div>

<div class="content">
  <h1>Food Requests</h1>
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

// Fetch food requests ordered by nearest timestamp
$sql = "SELECT * FROM orders ORDER BY created_at ASC"; // Assuming 'timestamp' is the column name for timestamp
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<h2>Order Details</h2>";
        echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
        echo "<p><strong>Gender:</strong> " . $row["gender"] . "</p>";
        echo "<p><strong>Address:</strong> " . $row["address"] . "</p>";
        echo "<p><strong>Pincode:</strong> " . $row["pincode"] . "</p>";
        echo "<p><strong>Food Type:</strong> " . $row["food_type"] . "</p>";
        echo "<a href='#'>View Request</a>";
        echo "</div>";
    }
} else {
    echo "No food requests found.";
}

$conn->close();
?>


</div>

</body>
</html>
