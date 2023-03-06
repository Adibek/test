<?php

$firstname = "Oskar";
$surname = "Gierlicz";

echo "Imię i nazwisko: $firstname $surname<br>";
echo 'Imię i nazwisko: $firstname $surname<br>';

// heredoc

echo <<< DATA

    Imię: $firstname<br>
    Nazwisko: $surname<br>

    DATA;

    $data = <<< DATA
    Imię: $firstname<br>
    Nazwisko: $surname<br>

    DATA;

    echo $data;

/// nowdoc

echo <<< DATA

    Imię: $firstname<br>
    Nazwisko: $surname<br>

    DATA;

    $bin = 0b1011;
    echo $bin; //11
    $oct = 011;
    echo $oct; //9
    $hex = 0xA1;
    echo $hex; //161

?>