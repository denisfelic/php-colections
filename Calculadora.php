<?php

class Calculadora
{

  public function __construct()
  {
  }

  public function calcularMedia($array): ?float  // retorna null ou float
  {

    $media = 0;
    for ($i = 0; $i < sizeof($array); $i++) {
      $media += $array[$i];
    }
    return $media /= sizeof($array);
  }
}
