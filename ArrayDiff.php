<?php

$values = [
  "Camila",
  "Jade",
  "Thais",
];


$values2 = [
  "Camila",
  "Jade",
];

$diff = array_diff($values, $values2);
// Pega a diferença dos arrays
foreach ($diff as $key => $value) {
  echo $value. PHP_EOL;
}