<?php
include "Car.php";

echo "hi <br>";

$myCar = new Car ("Dacia ");

$myCar2 = new Car ("Apple car");
echo $myCar->brand;
echo $myCar2->brand;
Car::makeNoise();


?>