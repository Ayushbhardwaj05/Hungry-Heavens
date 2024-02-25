<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Dashboard</title>
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
  <h1>Welcome to Your Restaurant Dashboard</h1>
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

    // Fetch restaurant name from database
    $sql = "SELECT restaurant_name FROM restaurants LIMIT 1"; // Assuming there is only one restaurant record
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<h2>Restaurant Name: " . $row["restaurant_name"] . "</h2>";
        }
    } else {
        echo "No restaurant found.";
    }

    $conn->close();
  ?>
  
  <div class="card">
    <h2>Food Requests</h2>
    <p>View and manage food requests here.</p>
    <a href="foodRequest.php">View Food Requests</a>
  </div>

  <div class="card">
    <h2>Order History</h2>
    <p>View past orders here.</p>
    <a href="orderHistory.php">View Order History</a>
  </div>

  <div class="card">
    <h2>Settings</h2>
    <p>Update restaurant settings here.</p>
    <a href="settings.php">Update Settings</a>
  </div>
</div>

</body>
</html>
