<?php


// & -> Modifica a referença, não criando uma cópia

$values = [10, 2, 49, 28, 77, 1, -2, 22];
$valor_procurado = 2;
$posicao_no_array = array_search($valor_procurado, $values);
// $posicao_no_array = array_search($valor_procurado, $values, $strict = true);   -> Busca restrita sem conversões
echo $posicao_no_array;
