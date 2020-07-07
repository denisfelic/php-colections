<?php

$values = [10, 2, 49, 28, 77, 1, -2, 22];

foreach ($values as $key => $value) {
  echo $value . PHP_EOL;
}
echo "Removendo o -2 do array..." . PHP_EOL;

unset($values[6]);    // Remove do array, caso pase "false" como indice, sera removido a posição "0" do array e "true" a pos "1"

foreach ($values as $key => $value) {
  echo $value . PHP_EOL;
}
