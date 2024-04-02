<?php

 session_name("customer");
 session_start();

if (isset($_SESSION["login"]) == true) {
?>
<html>
  <head>
    <link rel="stylesheet" href="css/bootstr.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>welcome customer</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg mynav">
    <ul class="navbar-nav ">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <li class="nav-item active">
		<a class="nav-link" href="index.php?indexx.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Appointment
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		 <a class="dropdown-item" href="index.php?test">Make Appointment</a>
          <a class="dropdown-item" href="index.php?viewappointments">View Appointment</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?viewreport">Report</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="index.php?generatebills">Bills</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
</html>

<?php
		
    if (isset($_GET['test'])) {
        include("test.php");
    }
	
	if (isset($_GET['viewappointments'])) {
        include("viewappointments.php");
    }
	
	if (isset($_GET['viewreport'])) {
        include("viewreport.php");
    }
	
	if (isset($_GET['generatebills'])) {
        include("generatebills.php");
    }
	
	if (isset($_GET['update_appoint'])) {
        include("update_appoint.php");
    }
	
	if (!isset($_GET['test'])){
		if (!isset($_GET['viewappointments'])){
			if (!isset($_GET['viewreport'])){
				if (!isset($_GET['generatebills'])){
					if (!isset($_GET['update_appoint'])){
						include("indexx.php");
					}
				}
			}
		}
	}
} else {
    header("Location: login.php");
}
?>
