<!DOCTYPE html>
<html>
<head>
  <title> Customer Login </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
  <form method="post" action="login.php">
    
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="user" id="user" placeholder="Enter Username">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="pass" id="pass" placeholder="Enter Password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="submit" value="Submit">Login</button>
    </div>
    <p>
      Don't have an account? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>

<?php

require '../vendor/autoload.php';
session_name("customer");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
    $database = $mongoClient->Family_Clinic;
    $collection = $database->register;

    $userData = $collection->findone([
		"username" => $username,
        "password" => $password
    ]);

    if ($userData) {
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        

        $_SESSION["login"] = true;
        header("Location: index.php");
    } else {
        echo "<script>alert('Invalid email or password.')</script>";
    }
}
?>
