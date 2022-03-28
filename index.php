<?php
require_once 'Bicycle.php';
require_once 'Vehicle.php';

$bike = new Bicycle("rouge", 2, 2);
$bike_2 = new Bicycle("bleu", 1, 2);
$car = new Vehicle("noir", 4, "éssence");
$car_2 = new Vehicle("jaune", 2, "éléctrique");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les classes</title>
</head>
<body>
    <?php
    echo $bike->forward();
    echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike->brake();
    echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike->brake();  
    ?>

    <br><br><br>

    <?php
    echo $car->start()."<br>";
    echo $car->forward();
    echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->brake();
    echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->brake();  
    ?>

    <br><br><br>

<?php
    echo $bike_2->forward();
    echo '<br> Vitesse du vélo : ' . $bike_2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike_2->brake();
    echo '<br> Vitesse du vélo : ' . $bike_2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike_2->brake();  
    ?>

    <br><br><br>

    <?php
    echo $car_2->start()."<br>";
    echo $car_2->forward();
    echo '<br> Vitesse de la voiture : ' . $car_2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car_2->brake();
    echo '<br> Vitesse de la voiture : ' . $car_2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car_2->brake();  
    ?>
</body>
</html>