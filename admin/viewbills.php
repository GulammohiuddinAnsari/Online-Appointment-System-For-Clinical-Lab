<?php
if (isset($_SESSION["login"]) == true) { ?>
    <html>

    <head>
		<link rel="stylesheet" href="css/satile.css">

		<link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body>
        <h2><b><u>Generated Bills</u></b></h2>
        <table class="user-table">
            <tr>
                <th>Bill ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Total</th>
				<th>Timestamp</th>
                <th>Delete</th>
            </tr>

            <?php
            require '../vendor/autoload.php';

            $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
            $database = $mongoClient->Family_Clinic;
            $collection = $database->bills;

            $bills = $collection->find(); ?>

            <?php foreach ($bills as $list) { ?>
                <tr>
                    <td><?php echo $list["_id"]; ?></td> 
                    <td><?php echo $list["name"]; ?></td>
                    <td><?php echo $list["email"]; ?></td>
                    <td> Rs. <?php echo $list["total"]; ?></td>
                    <td><?php echo  $list['timestamp']; ?></td>
                    <td><a href="deletebill.php?deletebill=<?php echo $list["_id"]; ?>" class="delete-link">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>

    </html>
<?php
} else {
    header("Location: login.php");
}
?>


