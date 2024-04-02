<?php
if (isset($_SESSION["login"]) == true) { ?>
    <html>

    <head>
       <link rel="stylesheet" type="text/css" href="css/style.css">
	   <link rel="stylesheet" href="css/satile.css">
    </head>

    <body>
        <h2><b><u>Customer Details</u></b></h2>
        <table class="user-table">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Delete</th>
            </tr>

            <?php
            require '../vendor/autoload.php';

            $mongoClient = new MongoDB\Client("mongodb://localhost:27017");
            $database = $mongoClient->Family_Clinic;
            $collection = $database->register;

            $customerList = $collection->find(); ?>

            <?php foreach ($customerList as $list) { ?>
                <tr>
                    <td><?php echo $list["username"]; ?></td>
                    <td><?php echo $list["email"]; ?></td>
                    <td><?php echo $list["password"]; ?></td>
                    <td><a href="deletecustomer.php?deletecustomer=<?php echo $list["_id"]; ?>" class="delete-link">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>

    </html>

<?php } else {
    header("Location: login.php");
}
?>
