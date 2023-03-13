<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrypt</title>
</head>
<body>
    <h4>Początek strony</h4>
    <?php
    // require, require_once, include, include_once()
    include "./list.php";
    include_once "./list.php";

    echo "<br>Require<br>";
    require "./list.php";
    require_once "./list.php";
    ?>
    <h4>Koniec strony</h4>
</body>
</html>