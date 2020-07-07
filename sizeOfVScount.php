<?php

require('Calculadora.php');

$items = [];


echo count($items) . PHP_EOL;
echo sizeof($items) . PHP_EOL;

$calculadora = new Calculadora();
echo $calculadora->calcularMedia($items);
