<?php

include "Car.php";

$carPams= [
    "color" => "red",
    "brand" => "Audi",
    "year" => 1997,
    "mileage" => 397800,
    "tireSize" => 16,
    "tirePressure" => 2.2,
    "type" => "Hybrid"
];
$regnCar = new Car($carPams);
print_r($regnCar);