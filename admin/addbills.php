<?php

if (isset($_SESSION["login"]) == true) { ?>
    <html>

    <head>
        <title>AddBills</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <div class="header">
            <h2><b><u>Add Bills<b><u></h2>
        </div>
        <form method="post" action="">
            <div class="input-group">
                <label>Name</label>
                <input required type="text" name="name" />
            
                <label>Email</label>
                <input required type="email" name="email" />
            
                <label>Total</label>
                <input required type="number" name="total" />

                <label>TimeStamp</label>
                <input type="time" id="timepicker" name="timestamp" class="timepicker form-control" value=""><br>
            </div>
            <div>
                <button type="submit" class="btn" name="addbills">Add Bills</button>
            </div>
        </form>
    </body>
</html>
<?php

    require '../vendor/autoload.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $total = $_POST["total"];
        $timestamp = $_POST["timestamp"];
		
		$m = new MongoDB\Client("mongodb://localhost:27017");
        $db = $m->Family_Clinic;
        $collection = $db->bills;

        $insertbills = $collection->insertOne(
            [
                "name" => $name,
                "email" => $email,
                "total" => $total,
                "timestamp" => $timestamp
            ]
        );

        if ($insertbills->getInsertedCount() > 0) {
            echo "<script>alert('Bill Added Sucessfully!');</script>";
            echo "<script>window.location.href='index.php?generatebills';</script>";
        }
    }
} else {
    header("Location: login.php");
}
?>
