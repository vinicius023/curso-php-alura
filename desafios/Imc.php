<?php

$peso = 108.4;
$altura = 1.84;

$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "IMC = ${imc} - Abaixo do peso";
} else if ($imc >= 18.5 && $imc < 24.9) {
    echo "IMC = ${imc} - Peso normal";
} else if ($imc >= 25 &&  $imc < 29.9) {
    echo "IMC = ${imc} - Sobrepeso";
} else if ($imc >= 30 &&  $imc < 34.9) {
    echo "IMC = ${imc} - Obesidade grau 1";
} else if ($imc >= 35 &&  $imc < 39.9) {
    echo "IMC = ${imc} - Obesidade grau 2";
} else if ($imc >= 40) {
    echo "IMC = ${imc} - Obesidade grau 3";
}
	
	
	
	
	
