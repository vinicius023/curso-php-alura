<?php

$idade = 25;
$nome = 'Vinicius';
$email = 'vinicius@email.com.br';

// aspas simples não interpreta varivel dentro de uma string e nem caracteres especias como o de quebra de linha
echo 'Olá Mundo! Eu tenho ' . $idade . ' anos' . PHP_EOL;

// aspas duplas consegue interpretar variveis dentro de uma string e outros 
echo "Olá Mundo!\nMe chamo $nome, eu tenho $idade anos e meu email é $email";