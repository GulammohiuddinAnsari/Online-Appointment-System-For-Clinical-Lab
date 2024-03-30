<?php
session_name("Admin");
session_start();
?>
<html>
<head>
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
  <form action="" method="POST">
  
    <div class="input-group">
      <label>Email</label>
      <input required type="text" name="email" placeholder="Enter Email">
    </div>
	
    <div class="input-group">
      <label>Password</label>
      <input required type="password" name="pass" placeholder="Enter Password">
    </div>

    <div class="input-group">
      <button type="submit" class="btn" name="submit" value="Submit">Login</button>
    </div>
  </form>
</body>

</html>

<?php
require '../vendor/autoload.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["pass"];

  $m = new MongoDB\Client("mongodb://localhost:27017");
  $db = $m->Family_Clinic;
  $collection = $db->Admin;

  $document = $collection->findone([
    "email" => $email,
    "password" => $password
  ]);

  if ($document) {
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $document["password"];

    $_SESSION["login"] = true;
    header("Location: index.php");
  } else {
    echo " <script>alert('Invalid email or password.')</script>";
  }
}
?>
