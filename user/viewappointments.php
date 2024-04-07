<?php
if (isset($_SESSION["login"]) == true) { ?>
    <html>

    <head>
		<link rel="stylesheet" href="css/satile.css">
       <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <h2><b><u>Appointments</b></u></h2>
        <table class="user-table">
            <tr>
                <th>Name</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>Allotment</th>
                <th>Date</th>
                <th>Gender</th>
                <th>Time</th>
                <th>Update</th>
            </tr>

            <?php
            require '../vendor/autoload.php';

            $m = new MongoDB\Client("mongodb://localhost:27017");
            $db = $m->Family_Clinic;
            $collection = $db->booked_test;

            $appointmentist = $collection->find(); ?>

            <?php foreach ($appointmentist as $list) { ?>
                <tr>
                    <td><?php echo $list["name"]; ?></td>
                    <td><?php echo $list["phone"]; ?></td>
                    <td><?php echo $list["email"]; ?></td>
                    <td><?php echo $list["allotment"]; ?></td>
                    <td><?php echo $list["date"]; ?></td>
                    <td><?php echo $list["gender"]; ?></td>
                    <td><?php echo $list["time"]; ?></td>
                    <td><a href="index.php?update_appoint=<?php echo $list["_id"]; ?>" class="update-link">Update</a></td> 
                </tr>
            <?php } ?>
        </table>
    </body>

    </html>

<?php } else {
    header("Location: login.php");
}
?>
