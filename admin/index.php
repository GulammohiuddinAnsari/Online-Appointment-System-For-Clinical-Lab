<?php
session_name("Admin");
session_start();

if (isset($_SESSION["login"]) == true) {

    ?>
    <html>

    <head lang="en">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstr.css" /><link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Welcome Admin</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg mynav">
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
            <ul class="navbar-nav ">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php?backimg.php">Home</a>
                    </li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Manage Report
						</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="index.php?addreport">Add Report</a>						
						<a class="dropdown-item" href="index.php?viewreport">View Report</a>						
					</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Manage Customer
						</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="index.php?customerdetail">Customer Detail</a>
						<a class="dropdown-item" href="index.php?viewappointments">View Appointments</a>						
					</div>
					</li>
                    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Invoice
						</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="index.php?addbills">Add Bills</a>
						<a class="dropdown-item" href="index.php?generatebills">Generate Bills</a>
						
					</div>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>Welcome! Admin</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </div>
            </ul>
        </nav>
	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

<?php
		
    if (isset($_GET['addreport'])) {
        include("addreport.php");
    }
	
	if (isset($_GET['updatereport'])) {
        include("updatereport.php");
    }

    if (isset($_GET['viewreport'])) {
        include("viewreport.php");
    }

	 if (isset($_GET['customerdetail'])) {
        include("customerdetail.php");
    }
	
	if (isset($_GET['viewappointments'])) {
        include("viewappointments.php");
    }
	
	if (isset($_GET['deletecustomer'])) {
        include("deletecustomer.php");
    }
	
	 if (isset($_GET['addbills'])) {
        include("addbills.php");
    }
	
	if (isset($_GET['generatebills'])) {
        include("generatebills.php");
    }
	
    if (isset($_GET['deletereport'])) {
        include("deletereport.php");
    } 

   if (isset($_GET['deletebill'])) {
        include("deletebill.php");
    } 

   if (!isset($_GET['addreport'])) {
        if (!isset($_GET['viewreport'])) {
            if (!isset($_GET['customerdetail'])) {
                if (!isset($_GET['generatebills'])) {
                    if (!isset($_GET['updatereport'])){
						 if (!isset($_GET['deletereport'])){ 
							if (!isset($_GET['addbills'])){
								if (!isset($_GET['viewappointments'])){
									if (!isset($_GET['deletecustomer'])){
										if (!isset($_GET['deletebill'])){
										include("backimg.php");
										}
									}
								}
							}
						}
						
					} 
                }
            }
        }
    }
} else {
    header("Location: login.php");
}
?>
