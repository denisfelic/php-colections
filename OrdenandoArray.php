<?php


$values = [10, 2, 49, 28, 77, 1, -2, 22];

foreach ($values as $key => $value) {
  echo "indice: $key - values: $value" . PHP_EOL;
}

sort($values); 
echo "Ordenando ". PHP_EOL;

foreach ($values as $key => $value) {
  echo "indice: $key - values: $value" . PHP_EOL;
}