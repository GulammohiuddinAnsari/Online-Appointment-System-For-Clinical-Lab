<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
 
</head>
<body>
  <div class="header">
  	<h2>Registration Here</h2>
  </div>
  <form method="post" action="">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input required type="text" name="username" /> 
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input required type="email" name="email" />
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input required type="password" name="pass"/>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input required type="password" name="pass"/>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already registered? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>

<?php
	
	session_start();
	
	require '../vendor/autoload.php';
    $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
    $database = $mongoClient->Family_Clinic;
    $collection = $database->register;
	
if (isset($_POST['reg_user'])) {
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password_1=$_POST['pass'];
  $password_2=$_POST['pass'];
  
  if ($password_1 != $password_2) {
	 echo "<script>alert('The two passwords do not match.')</script>";
  }
	$existinguser = $collection->findOne(['$or' => [['username' => $username], ['email' => $email]]]);
	if ($existinguser) {
        echo "<script>alert('Username or email already in use. Please choose another.')</script>";
    } else {
        $hashedPassword_1 = password_hash($password_1, PASSWORD_BCRYPT);
		
		$document=$collection->insertOne([
		'username'=> $username,
		'email'=> $email,
		'password'=> $password_1
	]);
	
	 if ($document->getInsertedCount() > 0) {
            echo "<script>alert('Reister Sucessfully!')</script>";
        }
	header("location: index.php");	
} 
}
?>
