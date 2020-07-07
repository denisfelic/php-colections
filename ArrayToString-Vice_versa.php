<?php


$string = "Denis, Artico, Brazil, São Paulo, Jade, Thais, Lucas, Kayque, Kelvyn, Du";

$array = explode(",", $string);

foreach ($array as $key => $value) {
  echo $value . PHP_EOL;
}

$array_to_string  = implode(",", $array);
echo $array_to_string;