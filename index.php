<?php
include "Car.php";
include "Train.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        Car::makeNoise();
        Train::makeNoise();
        echo "<br>";
        $train = new Train("Skoda");
        echo $train->getMilage();
    ?>
</body>
</html>