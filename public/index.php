<?php

use Drupestre\Designpattern\Factory\Car;
use Drupestre\Designpattern\Factory\CarFactory;

require '../vendor/autoload.php';

// Au lieu d'appeler le constructure de la classe (et éventuellement des méthodes)
$myCar = new Car();
$myCar->setColor("Blue");

// On utilise la factory.
$myBlueCar = CarFactory::getBlueCar();
dd($myBlueCar);
