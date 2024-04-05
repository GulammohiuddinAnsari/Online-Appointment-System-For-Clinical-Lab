<?php
if (isset($_SESSION["login"]) == true) { ?>
    <html>

    <head>
        <link rel="stylesheet" href="css/satile.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
                <th>Delete</th>
                <th>Update</th>
            </tr>

            <?php
            require '../vendor/autoload.php';

            $m = new MongoDB\Client("mongodb://localhost:27017");
            $db = $m->Family_Clinic;
            $collection = $db->reports;

            $reportlist = $collection->find(); ?>

            <?php foreach ($reportlist as $list) { ?>
                <tr>
                    <td><?php echo $list["name"]; ?></td>
                    <td><?php echo $list["cost"]; ?></td>
                    <td><?php echo $list["date"]; ?></td>
                    <td><?php echo $list["address"]; ?></td>
                    <td><?php echo $list["allotment"]; ?></td>
                    <td><a href="deletereport.php?deletereport=<?php echo $list["_id"]; ?>" class="delete-link">Delete</a></td>
                    <td><a href="index.php?updatereport=<?php echo $list["_id"]; ?>" class="update-link">Update</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>

    </html>

<?php } else {
    header("Location: login.php");
}
?>
