<?php



$names = [
  "Denis",
  "Lucas",
  "João",
  "Pedro",
  "Marcos",
];

$values = [
  2000,
  1500,
  3000,
  2500,
  1000,
];

$account = array_combine($names, $values);
var_dump($account);

echo $account["Denis"] . PHP_EOL;
echo "{$account["João"]}";
// echo $account[0]; - Not work