<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONATE FOOD</title>
    <style>
      
      .logo {
	height: 17vw;
	margin: 0px;
	padding: .5vw 5vw;
}

header {
	display: flex;
	flex-direction: row;
}

nav {
	margin: auto;
}

.nav-links {
	margin: 0.1vw 1vw;
	text-decoration: none;
	color: white;
	font-family: cursive;
	border-radius: 2vw;
	padding: 0.3vw 0.5vw;

}

.nav-links:hover {
	background-color: white;
	color: var(--primary);
	text-decoration: underline;
	transition: 0.5s ease;
}
    </style>
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #8787a3;
}

form {
    max-width: 600px;
    margin: 20px auto;
    background-color: #a29a9a;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    text-align: center;
    color: #333;
}

fieldset {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
}

legend {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="number"],
textarea,
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="radio"] {
    margin-right: 10px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
}
body::before{
  background: transparent;
}
    </style>
    <style>
      header button{
        height: fit-content;
    padding: 0.4vw 1vw;
    margin: auto 1vw;
    font-size: 1.3vw;
    border: 0.1vw double black;
      }
      button:hover {
	background-color: #6b59d3;
}
a {
	text-decoration: none;
	color: black;
}

a:hover {
	color: white;
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
<form action="submit_order.php" method="POST">
    <h1>Donate Food</h1>
    <h2>Take Someone's Blessings</h2>
    <p>Required Fields are followed by*</p>
    <h3>Personal Information</h3>
    <p>NAME:*<input type="text" name="name" required></p>
    <fieldset>
        <legend>Gender*</legend>
        <p>
            <input type="radio" name="gender" id="Male" value="Male" required><label for="Male">Male</label>
            <input type="radio" name="gender" id="Female" value="Female" required><label for="Female">Female</label>
            <input type="radio" name="gender" id="other" value="Others" required><label for="other">Others</label>
        </p>
    </fieldset>
    <p>Address*: <textarea name="address" id="address" cols="50" rows="5" required></textarea></p>
    <p>Email:* <input type="email" name="email" id="email" required></p>
    <p>Pincode*: <input type="number" name="pincode" id="pincode" required></p>
    <h2>Food Information</h2>
    <p>Food type: *
        <select name="food_type" id="food_type" required>
            <option value="">Select a food type</option>
            <option value="Vegetarian">Vegetarian</option>
            <option value="Non Vegetarian">Non Vegetarian</option>
        </select>
    </p>
    <p>Number of Plates:*<input type="number" name="num_plates" required></p>

    <input type="submit">
</form>

</body>
</html>