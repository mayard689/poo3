<?php
require_once '../src/MotorWay.php';
require_once '../src/PedestrianWay.php';
require_once '../src/ResidentialWay.php';
require_once '../src/Car.php';
require_once '../src/Bicycle.php';


$motorway = new MotorWay();
$pedestrianway = new PedestrianWay();
$residentialway = new ResidentialWay();

$bike=new Bicycle("blue",1);
$car=new Car("red",2,"fuel");


echo $motorway->addVehicle($bike)."<br>";
echo $motorway->addVehicle($car)."<br>";

echo $residentialway->addVehicle($bike)."<br>";
echo $residentialway->addVehicle($car)."<br>";

echo $pedestrianway->addVehicle($bike)."<br>";
echo $pedestrianway->addVehicle($car)."<br>";
