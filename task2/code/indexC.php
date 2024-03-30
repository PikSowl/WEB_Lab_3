<?php
session_start();
if (isset($_GET))
    $_SESSION['input'] = $_GET;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="get">
    <label>
        Surname <input type="text" name="surname"><br>
    </label>
    <label>
        Name <input type="text" name="name"><br>
    </label>
    <label>
        Age <input type="text" name="age"><br>
    </label>
    <label>
        Favorite Animal <input type="text" name="FavAnimal"><br>
    </label>
    <input type="submit" value="Continue">
</form>
</body>
</html>