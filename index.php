<?php
require_once 'Car.php';
require_once 'Bicycle.php';
$bmw = new Car('black', 4 ,'diesel');
$bmx = new Bicycle('grey',1);

echo '<br> Car <br>';
echo $bmw->start();
echo $bmw->forward();
echo $bmw->brake();

echo '<br> Bicycle <br>';
echo $bmx->start();
echo $bmx->forward();
echo $bmx->brake();
