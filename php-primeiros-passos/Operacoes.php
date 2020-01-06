<?php

$num = 2;
$expoente = 3;

$resultados = [];

$resultados['soma'] = $num + $num;
$resultados['subtracao'] = $num - $num;
$resultados['multiplicacao'] = $num * $num;
$resultados['divisao'] = $num / $num;
$resultados['restoDivisao'] = ($num + 1) % $num;

$resultados['exponenciacao'] = $num ** $expoente;

print_r($resultados);