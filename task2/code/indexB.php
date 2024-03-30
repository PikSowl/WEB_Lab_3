<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["age"] = $_POST["age"];
    header("Location: indexB2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Info</title>
</head>
<body>
<form method="post">
    Surname:    <input type="text" name="surname"><br>
    Name:       <input type="text" name="name"><br>
    Age:        <input type="text" name="age"><br>
    <input type="submit" value="Go to profile">
</form>
</body>
</html>