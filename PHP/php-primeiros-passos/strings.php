<?php

$idade = 21;
//Texto em aspas simples ele considera o texto como string
//Texto em aspas duplas junta o texto com o valor da variavel
echo "Olá mundo!".PHP_EOL;
echo "\t";
echo "Minha idade é \"$idade\" anos ".PHP_EOL;

echo 'Olá mundo, minha idade é '.$idade;

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos".PHP_EOL;

echo "Você tem $idade anos. Pode entrar";