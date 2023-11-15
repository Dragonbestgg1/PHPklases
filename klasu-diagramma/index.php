<?php
include "car-objects.php";
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
        $car = new Car("red", "audi", 200000, 2005, 16, 2.2, "Hybrid");
        print_r($car);
    ?>
</body>
</html>