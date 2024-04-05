<html>
<head>
<title>Medical Appointment Form </title>
<link href="css/stylee.css" rel='stylesheet' type='text/css' />
</head>
<body>
	<h1> Medical Appointment Form </h1>
	<div class="bg-agile">
		<div class="book-appointment">
			<h2>Make an appointment</h2>
			<form action="" method="post">
				<div class="left-agileits-w3layouts same">
					<div class="gaps">
						<p>Patient Name</p>
						<input type="text" name="name"  required="" />
					</div>
					<div class="gaps">
						<p>Phone Number</p>
						<input type="text" name="phone" required="" />
					</div>
					<div class="gaps">
						<p>Email</p>
						<input type="email" name="email" required="" />
					</div>
					<div class="gaps">
						<p>Allotment</p>
						<input type="text" name="allot" required="" />
					</div>
					</div>
					<div class="right-agileinfo same">
					<div class="gaps">
						<p>Select Date</p>
						<input type="date" id="datepicker1" name="date">
					</div>
					<div class="gaps">
						<p>Gender</p>
						<select class="form-control" name="gender">
							<option>Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="gaps">
						<p>Time</p>
						<input type="time" id="timepicker" name="time" class="timepicker form-control" value="">
					</div>
				</div>
				<div class="clear"></div>
				<input type="submit" name="send" value="Make an appointment">
			</form>
		</div>
	</div>
	<div class="copy w3ls">
		<p>&copy; 2023. Medical Appointment Form . All Rights Reserved | Design by <a href="http://mraftab.com/" target="_blank">Mr.Ansari</a> </p>
	</div>
</body>
</html>

<?php

require '../vendor/autoload.php';

if (isset($_POST['send'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$date = $_POST['date'];
	$allotment = $_POST['allot'];
	$time = $_POST['time'];

	$m = new MongoDB\Client("mongodb://localhost:27017");
	$db = $m->Family_Clinic;
	$collection = $db->booked_test;

	$document = $collection->insertOne([
		'name' => $name,
		'email' => $email,
		'phone' => $phone,
		'gender' => $gender,
		'date' => $date,
		'time' => $time,
		'allotment' => $allotment
	]);

	if ($document) {
		echo "<script>alert('Appointment confimed.')</script>";
		echo "<script>window.location.href='index.php?viewappointments'</script>";
	} else {
		echo "window.alert('Appointment confimation Failed!!')";
	}
}
?>
