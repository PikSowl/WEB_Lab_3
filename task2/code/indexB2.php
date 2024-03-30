<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Info</title>
</head>
<body>
<h1>User Info</h1>
<p>Surname: <?php echo $_SESSION["surname"]; ?></p>
<p>Name:    <?php echo $_SESSION["name"]; ?></p>
<p>Age:     <?php echo $_SESSION["age"]; ?></p>
</body>
</html>