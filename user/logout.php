<?php
session_name("Customer");
session_start();
session_unset();
session_destroy();
?>

<html>
<head>
    <title>Customer Logged Out</title>
</head>
<body>
    <script>
        alert("You have been logged out!");
        window.location.href = "login.php";
    </script>
</body>
</html>
