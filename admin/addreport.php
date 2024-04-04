<?php

if (isset($_SESSION["login"]) == true) { ?>
    <html>

    <head>
        <title>Report</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <div class="header">
            <h2>Add Report </h2>
        </div>
        <form method="post" action="">
            <div class="input-group">
                <label>Name</label>
                <input required type="text" name="name" />
            
                <label>Cost</label>
                <input required type="integer" name="cost" />
            
                <label>Date</label>
                <input required type="date" name="timestamp" />

                <label>Address</label>
                <input required type="text" name="address" />

                <label>Allotment</label>
                <input required type="text" name="allotment" /><br>
            </div>
            <div>
                <button type="submit" class="btn" name="addreport">Add Report </button>
            </div>
        </form>
    </body>
</html>
<?php

    require '../vendor/autoload.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $cost = $_POST["cost"];
        $date = $_POST["timestamp"];
        $address = $_POST["address"];
        $allotment = $_POST["allotment"];



        $m = new MongoDB\Client("mongodb://localhost:27017");
        $db = $m->Family_Clinic;
        $collection = $db->report;

        $insertResult = $collection->insertOne(
            [
                "name" => $name,
                "cost" => $cost,
                "date" => $date,
                "address" => $address,
                "allotment" => $allotment
            ]
        );

        if ($insertResult->getInsertedCount() > 0) {
            echo "<script>alert('Report Added Sucessfully!');</script>";
            echo "<script>window.location.href='index.php?viewreport';</script>";
        }
    }
} else {
    header("Location: login.php");
}
?>
