<?php
session_name("Admin");
session_start();
session_unset();
session_destroy();
?>

<html>
<head>
    <title>Admin Logged Out</title>
</head>
<body>
    <script>
        alert("You have been logged out!");
        window.location.href = "login.php";
    </script>
</body>
</html>
