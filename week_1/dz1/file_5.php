<?php

    $bmw = [
        "model" => "X5",
        "speed" => 120,
        "doors" => 5,
        "year" => "2015",
    ];

    $toyota = [
        "model" => "camry",
        "speed" => 130,
        "doors" => 5,
        "year" => "2015",
    ];

    $opel = [
        "model" => "astra",
        "speed" => 130,
        "doors" => 5,
        "year" => "2016",
    ];

    $cars = [
        "bmw" => $bmw,
        "toyota" => $toyota,
        "opel" => $opel,
     ];

     foreach ($cars as $name => $arrType) {
        echo "Car $name <br> \n";
        foreach ($arrType as $attr) {
            echo "$attr ";
        }
        echo "<br> \n";
     }

