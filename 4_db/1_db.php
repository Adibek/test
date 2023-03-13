<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <?php
    require_once "./connect.php";

    // echo $conn->connect_errno;
    $sql = "SELECT * FROM `users`;";
    $result = $conn->query($sql);
    // $user = $result->fetch_assoc();
    // echo $user["firstname"];
    while($user = $result->fetch_assoc()){
        // echo "test<br>";
        // print_r($user);
        // echo "<br>";
            $year = substr($user["birthday"], offset:0, length:4);
        echo <<< USERS
        Imię i nazwisko:$user[firstname] $user[lastname]<br>
        Data urodzenia: $user[birthday]
        Rok urodzenia: $year
        <hr>
        
USERS;


    }

    ?>
</body>
</html>