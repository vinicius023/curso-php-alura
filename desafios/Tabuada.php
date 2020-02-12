<?php

echo "\nTABUADA\n";

for ($i=0; $i <= 10; $i++) {
    echo "\nTabuada do ${i}:\n";
    for ($j=0; $j <= 10; $j++) {
        $k = $i * $j; 
        echo "${i} x ${j}\t= ${k}\n";
    }
}