<?php

$contador = 1;
$limite = 15;

echo 'LOOP WHILE' . PHP_EOL;
echo PHP_EOL;

while ($contador <= $limite) {
   echo $contador . PHP_EOL;
   $contador++;
}

echo PHP_EOL;
echo 'LOOP FOR' . PHP_EOL;
echo PHP_EOL;

for ($i=0; $i < $limite; $i++) { 
    echo $i . PHP_EOL;
}

echo PHP_EOL;
echo 'LOOP DO_WHILE' . PHP_EOL;
echo PHP_EOL;

do {
    $contador--;
    echo $contador . PHP_EOL;
} while ($contador > 1);