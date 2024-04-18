<?php
if (isset($_SESSION["login"]) == true) { ?>
    <html>

    <head>
       <link rel="stylesheet" type="text/css" href="css/style.css">
       <link rel="stylesheet" type="text/css" href="css/satile.css">
    </head>

    <body>
        <h2><b><u> Reports</u></b></h2>
        <table class="user-table">
            <tr>
                <th>Name</th>
                <th>Cost</th>
                <th>Date</th>
                <th>Address</th>
                <th>Allotment</th>
            </tr>

            <?php
            require '../vendor/autoload.php';

            $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
            $database = $mongoClient->Family_Clinic;
            $collection = $database->reports;

            $reportList = $collection->find(); ?>

            <?php foreach ($reportList as $list) { ?>
                <tr>
                    <td><?php echo $list["name"]; ?></td>
                    <td><?php echo $list["cost"]; ?></td>
                    <td><?php echo $list["date"]; ?></td>
                    <td><?php echo $list["address"]; ?></td>
                    <td><?php echo $list["allotment"]; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>

    </html>

<?php } else {
			header("Location: login.php");
}
?>
