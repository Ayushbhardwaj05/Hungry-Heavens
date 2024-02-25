<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Registration</title>
  <style>
      body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    .container {
      max-width: 400px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: 100%;
      background-color: purple;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
    opacity:0.7;
    }
  </style>
<link rel="stylesheet" href="css/styl.css">
<style>
    h2{
        color: black;
    }
</style>
</head>
<body>
<header>
<img src="logo.png" alt="logo" id="logo" class="logo">
    <nav>
      <a href="index.php" class="nav-links">Home</a>
      <a href="#moto" class="nav-links">Our Moto</a>
      <a href="donation.php" class="nav-links">Charity Donation</a>
      <a href="#contact" class="nav-links">Contact</a>
    </nav>
    <button><a href="#order">Donate Food</a></button>
    <button><a href="login.php">Login</a></button>
</header>
  <div class="container">
    <h2>Restaurant Registration</h2>
    <form action="register_process.php" method="POST">
      <input type="text" name="restaurant_name" placeholder="Restaurant Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="text" name="location" placeholder="Location" required>
      <input type="submit" value="Register">
    </form>
  </div>
</body>
</html>
